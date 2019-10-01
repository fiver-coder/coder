<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogDetailsController extends Controller
{
    //
    public function blogDetails(){
        return view('front.pages.blog-details');
    }
}
