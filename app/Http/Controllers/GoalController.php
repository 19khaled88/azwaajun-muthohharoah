<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalController extends Controller
{
  public function goal(){
    return view('goal');
  }
}
