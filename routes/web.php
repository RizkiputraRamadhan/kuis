<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\surveyController;
use App\Http\Controllers\dimensiController;
use App\Http\Controllers\konsumenController;
use App\Http\Controllers\pertanyaanController;
use App\Http\Controllers\responseController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/survey', function () {
//    return view('survey');
//});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('home');
});

Route::get('/',[surveyController::class,'konsumen']);
Route::post('/konsumen',[surveyController::class,'createKonsumen']);

Route::get('/survey',[surveyController::class,'kuis']);
Route::post('/survey',[surveyController::class,'createKuis']);

Route::get('/response',[responseController::class,'index']);

Route::get('/pertanyaan',[pertanyaanController::class,'index']);

Route::get('/konsumen',[konsumenController::class,'index']);
Route::get('/konsumen/{id}/{namaKonsumen}/show',[konsumenController::class,'show']);
Route::get('/konsumen/{id}/delete',[konsumenController::class,'destroy']);

Route::get('/dimensi',[dimensiController::class,'index']);

Route::get('/dashboard',[dashboardController::class,'index']);


Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'Auth']);
