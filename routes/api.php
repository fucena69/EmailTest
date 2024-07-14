<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Email;

Route::get('/email', function (Request $request) {
  //  return $request->user();
  [Email::class,"sendWelcomeEmail"];
  return "testttt";
});



Route::get('/email', [Email::class,"sendWelcomeEmail"]);