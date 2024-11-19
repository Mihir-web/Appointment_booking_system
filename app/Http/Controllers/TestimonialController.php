<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonials;

use App\Http\Requests\Admin\AddTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use Session;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->all();
        $testimonial = testimonials::orderBy('created_at','asc')->where('is_delete',0)->get();
        $testimonial_total = testimonials::where('is_delete',0)->count();
        return view('admin.testimonial.list',compact('testimonial','testimonial_total','filter'));
    }

    public function create()
    {
       return view('admin.testimonial.create');
    }

    public function store(AddTestimonialRequest $request)
    {
        try{
                $all = $request->all();

                $testimonial = testimonials::create($all);
                return redirect()->route('adminTestimonial')->with('success','Testimonial added successfully!');
            }catch(\Exception $e){
                echo "<pre>"; print_r($e->getMessage()); exit;
                return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $testimonial = testimonials::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request)
    {
        try{
            $all = $request->all();
           
            

            $all['bid'] = base64_decode($all['bid']);
            
            testimonials::find($all['bid'])->update($all);
            

            
                return redirect()->route('adminTestimonial')->with('success','Testimonial updated successfully');
           

        }catch(\Exception $e){
            echo "<pre>"; print_r($e->getMessage()); exit;
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function publish(Request $request)
    {
        try{
           
            $record = testimonials::find(base64_decode($request->id));
            
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

                    $inventory = testimonials::find($id);


                 
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
