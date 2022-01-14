<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use DB;
class MessageController extends Controller
{
    public function message(Request $request){
        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['message']=$request->message;
        $data=DB::table('messages')->insert($data);
        if($data){
            // return View::make('index');
            // return redirect()->route('/biodataIndex');
            // Redirect::route('/biodataIndex')->with('message','TEST');
            return redirect()->to('/')->with('message', 'Thank you for updating your billing information.');
        }else{
            alert('No message submited!');
        }
    }
}
