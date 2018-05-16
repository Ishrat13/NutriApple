<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function loginshow(){
        return view('auth.adminlogin');
    }


    public function login(Request $request)
    {

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('dashboard');
        }else{
            return redirect()->back()->with('email');
        }
//        return $request;
    }



}
