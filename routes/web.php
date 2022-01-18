<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'index']);
Route::get('/jobs',function (){return view('pages.jobs');});
Route::get('/course',function (){return view('pages.cource');});
Route::get('/content',function (){return view('pages.content');});
Route::get('/events',function (){return view('pages.events');});
Route::get('/logout',[HeaderController::class,'logout']);
Route::get('/dashboard', function () {return view('welcome');})->middleware(['auth'])->name('dashboard');

/* User Action */
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
});
require __DIR__.'/auth.php';
