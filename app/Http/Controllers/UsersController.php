<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;



class UsersController extends Controller
{
    //login user by this method
    public function login() {
        $data = request()->all();
        //validate
        $this->validate(request(),[
            'phone'     => 'required | min:10',
            'password'  =>  'required | min:6 '
        ]);
        $user_data = [
            'phone' => $data['phone'],
            'password' => $data['password']
        ];

            if(Auth::attempt($user_data)) {
                //set data in session
                create_session();
                //redirect to home page
               return redirect()->route('user.profile');
            }else {
                //redirect to login page
                Session::flash('warning', 'شماره تماس و یا رمز عبور اشتباه می باشد!');
                return  redirect()->route('home');
            }

        //$new_user_object = User::create($user_data);
    }

    //create user session
    public function create_session() {
        $user = Auth::user();
        Session::put('id', $user->id);
        Session::put('name', $user->name);
        Session::put('email', $user->email);
        Session::put('phone', $user->phone);
    }
}
