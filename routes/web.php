<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Email;


$environment = App::environment();
Route::get('/', function () {


    
    return env('APP_NAME');
});


Route::get('/email', [Email::class,"sendWelcomeEmail"]);