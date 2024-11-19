<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\testimonials;
use Config;
use Excel;
use Session;
use Auth;


class AboutUsController
{
    public function index() {
        $testimonials = testimonials::where('is_active',1)->get();
         $meta_title = "About Us - Trusted Used Car Dealership In Toronto";
        $meta_description = "We offer affordable used vehicles with the best financing rates & terms available. We're a trusted used car dealership located in Toronto. Visit us today!";
     return view('aboutus',compact('testimonials','meta_title','meta_description'));
    }
}
