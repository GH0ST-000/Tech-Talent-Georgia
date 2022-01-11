<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'index']);
Route::get('/jobs',function (){return view('pages.jobs');});
Route::get('/course',function (){return view('pages.cource');});
Route::get('/content',function (){return view('pages.content');});
Route::get('/events',function (){return view('pages.events');});
Route::get('/logout',[HeaderController::class,'logout']);
Route::get('account/information',[InformationController::class,'index'])->name('information');
Route::get('/dashboard', function () {return view('welcome');})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
