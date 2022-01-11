<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\TermsConditionController;


Route::get('/', function () {
    return view('index');
});

// Biodata Profile section
Route::get('/biodataIndex',[BiodataController::class, 'biodataIndex']);
Route::get('/goal',[GoalController::class, 'goal']);
Route::get('/term-condition',[TermsConditionController::class, 'termCondition']);
Route::get('/bio-dataCreate',[BiodataController::class, 'biodataCreate']);
