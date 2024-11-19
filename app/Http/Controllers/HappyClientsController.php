<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\happy_clients;
use App\Http\Requests\Admin\AddHappyClientRequest;
use App\Http\Requests\Admin\UpdateHappyClientRequest;
use Session;
use Illuminate\Support\Facades\Storage;
use DB;

class HappyClientsController extends Controller
{
    

    public function index(Request $request)
    {
        $filter = $request->all();
        $happy_clients = happy_clients::orderBy('display_order','asc')->where('is_delete',0)->get();
        $happy_clients_total = happy_clients::where('is_delete',0)->count();
        return view('admin.happy_clients.list',compact('happy_clients','happy_clients_total','filter'));
    }

    public function create()
    {
        return view('admin.happy_clients.create');
    }

    public function store(AddHappyClientRequest $request)
    {
        try{
                $all = $request->all();

                
               
                if (isset($all['photo'])) {
                    $imageName = 'happy_client_'.time().'.'.$all['photo']->extension();  
                    $all['photo']->move(public_path('assets\img\happyClients'), $imageName);
                    $all['photo'] = $imageName;
                }else{
                    $all['photo'] = '';
                }
                
                $display_order = happy_clients::max('display_order') ?? 0;
                $all['display_order'] = $display_order+1;
                $happy_clients = happy_clients::create($all);
                return redirect()->route('adminHappyClients')->with('success','Client Image added successfully!');
            }catch(\Exception $e){
                echo "<pre>"; print_r($e->getMessage()); exit;
                return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $happy_client = happy_clients::find($id);
        $happy_client_count = happy_clients::count();
        return view('admin.happy_clients.edit',compact('happy_client','happy_client_count'));
    }

    public function update(UpdateHappyClientRequest $request)
    {
        try{
            $all = $request->all();
            $all['bid'] = base64_decode($all['bid']);
            $happy_client = happy_clients::find($all['bid']);
            if($all['display_order'] != $happy_client['display_order'])
            {
                happy_clients::where('display_order', $all['display_order'])->update(['display_order'=>$happy_client['display_order']]);
            }

            if(isset($all['photo']) && !empty($all['photo'])){
                $imageName = 'happy_client_'.time().'.'.$all['photo']->extension();  
                
                    $all['photo']->move(public_path('assets\img\happyClients'), $imageName);
                    
                $old_image_path = public_path('assets/img/happyClients').'/'.$all['photo_hidden'];
               
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    }     
                    // if (Storage::exists($old_image_path)) {
                    //     Storage::delete($old_image_path);
                    // }

                    $all['photo'] = $imageName;
            }else{

                $all['photo'] = $all['photo_hidden'];
            }
        
           
           
            $happy_client->update($all);
            

            
                return redirect()->route('adminHappyClients')->with('success','Record updated successfully');
           

        }catch(\Exception $e){
            echo "<pre>"; print_r($e->getMessage()); exit;
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function publish(Request $request)
    {
        try{
           
            $record = happy_clients::find(base64_decode($request->id));
            
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

                    $happy_client = happy_clients::find($id);

                    $old_image_path = public_path("assets/img/happyClients").'/'.$happy_client['photo'];
                    
                    // if (Storage::exists($old_image_path)) {
                    //     Storage::delete($old_image_path);
                    // }
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    } 
                    
                    DB::update(DB::raw("UPDATE happy_clients SET display_order = display_order - 1 WHERE display_order > " . $happy_client['display_order']));

                    $happy_client->delete();

                Session::flash('error','A record has been deleted');
                return 'success';
            }
            return 'failed';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
