<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// Rota pública 
Route::post('/',  [LoginController::class, 'login'])->name('login'); // POST - http://127.0.0.1:8000/api/
// { "email": "walisson@celke.com.br", "password": "123456a" }

// Rota restrita
Route::group( ['middleware' => ['auth:sanctum']], function(){
    
    Route::get('/users', [UserController::class, 'index']); // GET - http://127.0.0.1:8000/api/users?page=2


    Route::post('/logout/{user}', [LoginController::class, 'logout']); // POST - http://127.0.0.1:8000/api/logout?1
});