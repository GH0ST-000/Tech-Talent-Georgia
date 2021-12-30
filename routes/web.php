<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs',function (){
    return view('pages.jobs');
});
Route::get('/course',function (){
    return view('pages.cource');
});
Route::get('/content',function (){
    return view('pages.content');
});
Route::get('/events',function (){
    return view('pages.events');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
