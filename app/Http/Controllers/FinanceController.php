<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\financing_leads;
use Config;
use Excel;
use Session;
use Auth;
use App\Exports\ContactLeadsExport;
use App\Http\Requests\StoreFinancingApplicationRequest;

class FinanceController
{
    public function storeapplication(StoreFinancingApplicationRequest $request) {
        $all = $request->all();
        
        $all['email'] = getEncryptedString($all['email']);
        $all['phone'] = getEncryptedString($all['phone']);
        $all['ip_address'] = getClientIp();
        
     $contact = financing_leads::create($all);
     
     return redirect()->route('thankyou');
    }
}
