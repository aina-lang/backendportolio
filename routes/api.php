<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


header("Access-Control-Allow-Origin: https://ainamercia.netlify.app");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

Route::post('/', [MailController::class, 'sendEmail']);
