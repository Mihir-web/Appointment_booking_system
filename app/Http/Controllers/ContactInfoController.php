<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_info;
use App\Http\Requests\Admin\UpdateContactInfoRequest;
use Session;


class ContactInfoController extends Controller
{
   

    public function index(Request $request)
    {
        $filter = $request->all();
        $contact_info = contact_info::where(function($q)use($filter){
                    if(isset($filter['search']) && !empty($filter['search'])){
                        $q->where('name','LIKE','%'.$filter['search'].'%');
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['status']) ){
                        $q->where('is_active',$filter['status']);
                    }
                })->first();
        
        return view('admin.contact_info.list',compact('contact_info'));
    }

    public function update(UpdateContactInfoRequest $request)
    {
        try{
            $all = $request->all();

            

            $all['bid'] = base64_decode($all['bid']);
            $contact_info = contact_info::find($all['bid']);
            
            contact_info::find($all['bid'])->update($all);
            
            
                return redirect()->route('adminContactInfo')->with('success','Contact info updated successfully');
           

        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
