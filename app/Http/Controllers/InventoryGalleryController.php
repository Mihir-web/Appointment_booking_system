<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventory_gallery;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\Admin\AddInventoryGalleryRequest;
use Session;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Storage;
class InventoryGalleryController extends Controller
{
    public function index(Request $request)
    {
        $parent_id = $request->id;
        $parent_id = base64_decode($parent_id);
        $inventory_gallery_images = inventory_gallery::where('parent_record_id',$parent_id)->where('is_delete',0)->orderBy('display_order')->get();
        $inventory_gallery_images_total = inventory_gallery::where('is_delete',0)->count();
        
        return view('admin.inventory_gallery.list',compact('inventory_gallery_images','inventory_gallery_images_total','parent_id'));
    }

    public function create(Request $request)
    {
        $parent_id = $request->id;   
        
        return view('admin.inventory_gallery.create', compact('parent_id'));
    }

    public function store(Request $request)
    {
        try{
                $all = $request->all();
              
                $display_order = inventory_gallery::where('parent_record_id',base64_decode($all['parent_record_id']))->select(DB::raw('COALESCE(MAX(display_order), 0) as max_value'))->first()->max_value;
                if($display_order == 0){
                    $display_order = $display_order+1;
                }
                foreach ($request->file('photo') as $image) {
                    
                    if ($image) {
                        $imageNameWithoutExtension = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                        $imageName = $imageNameWithoutExtension.'_'.time().'.'.$image->getClientOriginalExtension();  
                    
                        $image->move(public_path('assets\img\cars'), $imageName);
                       
                       $inventory_gallery = new inventory_gallery;
                       $inventory_gallery->photo = $imageName;
                       $inventory_gallery->parent_record_id = base64_decode($all['parent_record_id']);
                       $inventory_gallery->display_order = $display_order;
                       $display_order++;
                       $inventory_gallery->is_active = 1;
                       $inventory_gallery->save();
                    } else {
                        
                       return back()->with('error','No image uploaded.');
                    }
                }
               
                return redirect()->route('adminInventoryGallery',$all['parent_record_id'])->with('success','New car added successfully!');
            }catch(\Exception $e){
                echo "<pre>"; print_r($e->getMessage()); exit;
                return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $inventory_gallery_images = inventory_gallery::find($id);
        
        return view('admin.inventory_gallery.edit',compact('inventory_gallery_images'));
    }


    public function publish(Request $request)
    {
        try{
           
            $record = inventory_gallery::find(base64_decode($request->id));
            
            if(!empty($record)){
                if($record->is_active == 1){
                    $record->update(['is_active'=>0]);
                    
                    
                }else{
                    $record->update(['is_active'=>1]);
                }
                return 'success';
            }
            return 'Record not found';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try{
            $all = $request->all();
            if(isset($all['id']) && !empty($all['id'])){
                
                    $id = base64_decode($all['id']);
                   
                    $inventory = inventory_gallery::find($id);


                    
                    $old_image_path = public_path('assets\img\cars').$inventory->photo;
               
                    // if (Storage::exists($old_image_path)) {
                    //     Storage::delete($old_image_path);
                    // }
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    } 
                    $inventory->delete();
               
                Session::flash('error','A record has been deleted');
                return 'success';
            }
            return 'failed';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
