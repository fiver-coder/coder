<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addPropertyController extends Controller
{
    //
    public function addProperty(){
        return view("front.pages.add-property");
    }
}
