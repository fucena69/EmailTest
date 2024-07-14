<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
  //  return $request->user();
  [Email::class,"sendWelcomeEmail"];
  return "asdasdasd";
});



Route::get('/email', [Email::class,"sendWelcomeEmail"]);