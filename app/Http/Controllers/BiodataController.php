<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodataIndex(){
      return view('biodataIndex');
    }

    public function biodataCreate(){
      return view('biodataCreate');
    }
}

