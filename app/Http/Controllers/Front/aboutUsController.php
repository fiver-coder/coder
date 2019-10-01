<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutUsController extends Controller
{
    //
    public function about(){
        return view("front.pages.about-us");
    }
}
