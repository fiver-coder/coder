<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class ajaxRequests extends Controller
{
    //

    public function save_user_data() {
        $data = request()->all();
        Session::put('id', $data['id']);
        Session::put('full_name', $data['full_name']);
        Session::put('img', $data['img']);
        Session::put('email', $data['email']);
        echo "true";
    }
}
