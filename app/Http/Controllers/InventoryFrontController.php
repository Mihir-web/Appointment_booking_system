<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventory;
use App\Models\Inventory_Gallery;
use App\Models\brands;
use App\Models\years;
use Session;
use DB;
use Illuminate\Support\Facades\Storage;


class InventoryFrontController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->all();
        $inventory = inventory::where(function($q)use($filter){
                    if(isset($filter['search']) && !empty($filter['search'])){
                        $q->where('name','LIKE','%'.$filter['search'].'%');
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['car_type']) ){
                        $q->where('car_type','LIKE','%'.$filter['car_type'].'%');
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['brand']) ){
                        $q->where('brand',$filter['brand']);
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['transmission_type']) ){
                        $q->where('transmission_type',$filter['transmission_type']);
                    }
                })->where(function($q)use($filter){
                    if(isset($filter['model_year']) ){
                        $q->where('model',$filter['model_year']);
                    }
                })->Sortable(['display_order' => 'asc'])->where('is_active', 1)->where('is_delete',0)->paginate(16);
                
        $inventory_total = inventory::where('is_delete',0)->count();
        $years = years::where('year','<=',date("Y"))->orderBy('year','desc')->get();
        $brands = brands::where('is_active',1)->orderBy('display_order','asc')->get();
        $meta_title = "Used Cars For Sale In Toronto, Vehicles Under 20k Available";
        $meta_description = "Frontier Fine Cars is a trusted used car dealer for Toronto, Scarborough, Markham and North York. We offer affordable vehicles with quick & easy financing.";
        return view('inventoryListing',compact('inventory','inventory_total','filter','brands', 'years','meta_title','meta_description'));
    }

    public function detail(Request $request)
    {
        $path = $request->segments();
       
        $car_data = DB::table('inventory')->where('alias','LIKE','%'.$path[1].'%')
                                            ->where('alias_id','LIKE','%'.$path[2].'%')
                                            ->where('is_active', 1)
                                            ->where('is_delete', 0)->first(); 
        

        if(empty($car_data) > 0){
            return abort(404);
        }

        $meta_title = $car_data->meta_title;
        $meta_description = $car_data->meta_description;

        $car_photos = inventory_gallery::where('parent_record_id',$car_data->id)->where('is_active',1)->get();

        return view('inventorydetail', compact('car_data','car_photos','meta_title','meta_description'));   
    }
}
