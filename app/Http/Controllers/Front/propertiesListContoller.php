<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class propertiesListContoller extends Controller
{
    public function propertiesList()
    {
        return view("front.pages/properties-list");
    }
}
