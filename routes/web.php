<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('jobs.index');
});

Route::resource('jobs', JobController::class)
    ->only(['index']);

Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisteredUserController :: class, 'create']);
    Route::post('/register', [RegisteredUserController :: class, 'store']);

    Route::get('/login', [SessionController :: class, 'create']);
    Route::post('/login', [SessionController :: class, 'store']);
});
 
Route::delete('/logout', [SessionController :: class, 'destroy'])
->middleware('auth');



