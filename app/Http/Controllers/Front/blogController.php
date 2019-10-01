<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogController extends Controller
{
    //
    public function blog()
    {
        return view("front.pages.blog");
    }
}
