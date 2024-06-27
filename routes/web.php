<?php

use App\Http\Controllers\OpenAiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('open-ai', [OpenAiController::class,'index']);