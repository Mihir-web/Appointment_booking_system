<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventory;
use App\Models\Inventory_Gallery;
use App\Models\brands;
use App\Models\years;
// use App\http\Helper\AddImageModelRel;
use App\Http\Requests\Admin\AddInventoryRequest;
use App\Http\Requests\Admin\UpdateInventoryRequest;
// use App\http\Helper\AddDocumentModelRel;
use Session;
use Illuminate\Support\Facades\Storage;
// use App\Document;

class InventoryController extends Controller
{
    

    public function index(Request $request)
    {
        $filter = $request->all();
        $inventory = inventory::where(function($q)use($filter){
                    if(isset($filter['search']) && !empty($filter['search'])){
                        $q->where('name','LIKE','%'.$filter['search'].'%');
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['status']) ){
                        $q->where('is_active',$filter['status']);
                    }
                })->orderBy('created_at','asc')->where('is_delete',0)->get();
        $inventory_total = inventory::where('is_delete',0)->count();
        return view('admin.inventory.list',compact('inventory','inventory_total','filter'));
    }

    public function create()
    {
        $years = years::where('year','<=',date("Y"))->orderBy('year','desc')->get();
        $brands = brands::where('is_active',1)->orderBy('display_order','asc')->get();
        return view('admin.inventory.create',compact('brands','years'));
    }

    public function store(AddInventoryRequest $request)
    {
        try{
                $all = $request->all();

                $alias_name = $all['name'].'-'.$all['trim'].'-'.$all['model'];
                
                $alias_name = str_replace(' ', '-',$alias_name);
                
                $all['alias'] = $alias_name;
                $all['alias_id'] = time();
               
                if (isset($all['photo']) && is_uploaded_file($all['photo'])) {
                    $imageName = $alias_name.'-'.time().'.'.$all['photo']->extension();  
                    $all['photo']->move(public_path('assets\img\cars'), $imageName);
                    $all['photo'] = $imageName;
                }else{
                    $all['photo'] = '';
                }
                
                $inventory = inventory::create($all);
                return redirect()->route('adminInventory')->with('success','New car added successfully!');
            }catch(\Exception $e){
                echo "<pre>"; print_r($e->getMessage()); exit;
                return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $inventory = inventory::find($id);
        $years = years::where('year','<=',date("Y"))->orderBy('year','desc')->get();
        $brands = brands::where('is_active',1)->orderBy('display_order','asc')->get();
        return view('admin.inventory.edit',compact('inventory','brands','years'));
    }

    public function update(UpdateInventoryRequest $request)
    {
        try{
            $all = $request->all();
           
            $alias_name = $all['name'].'-'.$all['trim'].'-'.$all['model'];
                
                $alias_name = str_replace(' ', '-',$alias_name);
                
                $all['alias'] = $alias_name;

            $all['bid'] = base64_decode($all['bid']);
            
            if(isset($all['want_to_upload_photo']) && $all['want_to_upload_photo'] == 1){

            if(isset($all['photo']) && !empty($all['photo'])){
                $imageName = $alias_name.'-'.time().'.'.$all['photo']->extension();  
                
                    $all['photo']->move(public_path('assets\img\cars'), $imageName);
                    
                $old_image_path = public_path('assets\img\cars').$all['photo_hidden'];
                
                  if (Storage::exists($old_image_path)) {
                        Storage::delete($old_image_path);
                    }

                    $all['photo'] = $imageName;
            }else{

                $all['photo'] = $all['photo_hidden'];
            }
        }else{

            if(isset($all['photo_hidden']) && !empty($all['photo_hidden'])){
             $old_image_path = public_path('assets\img\cars').$all['photo_hidden'];
               
                    // if (Storage::exists($old_image_path)) {
                    //     Storage::delete($old_image_path);
                    // }

                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    } 
                }

            $all['photo'] = '';
        }
           
           
            inventory::find($all['bid'])->update($all);
            

            
                return redirect()->route('adminInventory')->with('success','Inventory updated successfully');
           

        }catch(\Exception $e){
            echo "<pre>"; print_r($e->getMessage()); exit;
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function publish(Request $request)
    {
        try{
           
            $record = inventory::find(base64_decode($request->id));
            
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

                    $inventory = inventory::find($id);
                    
                    $inventory->is_delete = 1;
                    $inventory->update();

                Session::flash('error','A record has been deleted');
                return 'success';
            }
            return 'failed';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
