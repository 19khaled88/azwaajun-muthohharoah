<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginRegisterController extends Controller
{
    public function loginRegister(){
        return view('login/login');
    }

    public function login(Request $request){
        
    }

    public function register(Request $request){
       
    }
}
