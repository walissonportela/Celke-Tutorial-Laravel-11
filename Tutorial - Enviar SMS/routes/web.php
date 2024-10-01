<?php

use App\Http\Controllers\EnviarSmsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EnviarSmsController::class, 'enviarSms'])->name('enviar-sms.index');
