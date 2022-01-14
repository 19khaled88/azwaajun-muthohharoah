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
use App\Http\Controllers\MessageController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\LoginRegisterController;


Route::get('/', function () {
    return view('index');
});

// Biodata Profile section
Route::get('/biodataIndex',[BiodataController::class, 'biodataIndex']);
Route::get('/goal',[GoalController::class, 'goal']);
Route::get('/term-condition',[TermsConditionController::class, 'termCondition']);
Route::get('/bio-dataCreate',[BiodataController::class, 'biodataCreate']);
Route::get('/login/login',[LoginRegisterController::class, 'loginRegister']);
Route::post('/login',[LoginRegisterController::class, 'login']);
Route::post('/register',[LoginRegisterController::class, 'register']);
Route::post('/biodatainsert',[BiodataController::class, 'biodatainsert']);
Route::post('/message',[MessageController::class, 'message']);
Route::post('/searchbio',[BiodataController::class, 'searchbio']);


