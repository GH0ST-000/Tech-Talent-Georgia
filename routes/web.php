<?php

use App\Http\Controllers\CourceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/* User Side */

Route::get('/',[WelcomeController::class,'index']);
Route::get('/jobs',[PageController::class,'job']);
Route::get('/course',[PageController::class,'cource']);
Route::get('/content',[PageController::class,'content']);
Route::get('/events',[PageController::class,'events']);
Route::get('/show-more',[PageController::class,'show_more']);


Route::get('/logout',[HeaderController::class,'logout']);
Route::get('/dashboard', function () {return view('welcome');})->middleware(['auth'])->name('dashboard');

/* Admin User Action */
Route::prefix('user')->group(function (){
    Route::get('/information',[InformationController::class,'index'])->name('information');
    Route::get('/create_jobs',[JobsController::class,'index'])->name('create');
    Route::post('/add_jobs',[JobsController::class,'store'])->name('add-jobs');
    Route::get('/show-jobs',[JobsController::class,'ShowAddedJobs'])->name('jobs');
    Route::get('/latest',[JobsController::class,'LatestUpload'])->name('latest');
    Route::get('/statistic',[JobsController::class,'Statistic'])->name('statistic');
    Route::get('/job/edit/{id}',[JobsController::class,'UserJobEdit'])->name('edit');
    Route::get('/job/delete/{id}',[JobsController::class,'UserJobDelete'])->name('delete');
    Route::post('/update/job',[JobsController::class,'UserJobUpdate'])->name('update');
    Route::get('/create_event',[EventController::class,'index'])->name('create-event');
    Route::post('/add_event',[EventController::class,'store'])->name('add-event');
    Route::get('/create_course',[CourceController::class,'index'])->name('create-course');
    Route::post('/add_course',[CourceController::class,'store'])->name('add-course');
});

require __DIR__.'/auth.php';
