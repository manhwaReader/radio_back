<?php
use Illuminate\Http\Request;
use  App\Http\Controllers\AutheController;
use  App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AutheController::class,'login']);
    Route::post('signup', [AutheController::class,'signup']);
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [AutheController::class,'logout']);
        Route::get('user', [AutheController::class,'user']);
    });
});

Route::resource('destinastions', DestinationController::class);