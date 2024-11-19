<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\financing_leads;

use Config;
use Excel;
use Session;
use Auth;
use App\Exports\FinancingLeadsExport;

class FinancingLeadsController extends Controller
{
   

    public function index(Request $request)
    {
        $filter = $request->all();
        $leads = financing_leads::where(function($q)use($filter){
            if(!empty($filter['search'])){
                 $q->where('name','LIKE','%'.$filter['search'].'%')
              ->orwhere('email','LIKE','%'.getEncryptedString($filter['search']).'%')
                ->orwhere('phone','LIKE','%'.getEncryptedString($filter['search']).'%')
                ->orwhere('message','LIKE','%'.$filter['search'].'%');
            }
        })
        ->orderBy('created_at','desc')->where('is_delete',0)->paginate(Config::get('constants.pageRecords'));
        $financing_lead_total = financing_leads::where('is_delete',0)->count();
        return view('admin.financing_lead.list',compact('leads','filter','financing_lead_total'));
    }

    public function delete(Request $request)
    {
        try{
            $all = $request->all();
            if(isset($all['id']) && !empty($all['id'])){
                
                    $id = base64_decode($all['id']);

                    $financing_lead = financing_leads::find($id);


                    $financing_lead->is_delete = 1;
                    $financing_lead->update();

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
        return Excel::download(new FinancingLeadsExport($request->all()), 'financing_leads.xlsx');
    }

    public function statuschange(Request $request)
    {
        try{
            $record = financing_leads::find(base64_decode($request->id));
            
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
