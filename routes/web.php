<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'yonetim'],function (){
    Route::get('/',[\App\Http\Controllers\YonetimController::class,'index']);
});
           


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=>['auth','isAdmin'], 'prefix'=>'admin'],function(){


});
