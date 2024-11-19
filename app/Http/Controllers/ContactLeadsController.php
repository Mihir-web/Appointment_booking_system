<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_leads;

use Config;
use Excel;
use Session;
use Auth;
// use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FinancingLeadsExport;

class ContactLeadsController extends Controller
{
   

    public function index(Request $request)
    {
        
        $filter = $request->all();
        $leads = contact_leads::where(function($q)use($filter){
            if(!empty($filter['search'])){
                 $q->where('name','LIKE','%'.$filter['search'].'%')
              ->orwhere('email','LIKE','%'.getEncryptedString($filter['search']).'%')
                ->orwhere('phone','LIKE','%'.getEncryptedString($filter['search']).'%')
                ->orwhere('message','LIKE','%'.$filter['search'].'%');
            }
        })
        ->orderBy('created_at','desc')->where('is_delete',0)->paginate(Config::get('constants.pageRecords'));
        $contact_total = contact_leads::where('is_delete',0)->count();
        return view('admin.contact_lead.list',compact('leads','filter','contact_total'));
    }

    public function delete(Request $request)
    {
        try{
            $all = $request->all();
            if(isset($all['id']) && !empty($all['id'])){
                
                    $id = base64_decode($all['id']);

                    $contact_lead = contact_leads::find($id);


                    $contact_lead->is_delete = 1;
                    $contact_lead->update();

                Session::flash('error','A record has been deleted');
                return 'success';
            }
            return 'failed';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function export(Request $request)
    {
        return Excel::download(new FinancingLeadsExport($request->all()), 'contact_leads.xlsx');
    }

    public function statuschange(Request $request)
    {
        try{
           
            $record = contact_leads::find(base64_decode($request->id));
            
            if(!empty($record)){
                if($record->varStatus == 1){
                    $record->update(['varStatus'=>0]);
                    
                    
                }else{
                    $record->update(['varStatus'=>1]);
                }
                return 'success';
            }
            return 'Record not found';
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
