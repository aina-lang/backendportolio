<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


Route::post('/', [MailController::class, 'sendEmail']);
