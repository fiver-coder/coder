<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactUsController extends Controller
{
    //
    public function contact(){
        return view("front.pages.contact-us");
    }
}
