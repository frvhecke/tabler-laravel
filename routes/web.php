<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/interface/buttons', function () {
  return view('pages/interface/buttons');
});

Route::get('/interface/alerts', function () {
  return view('pages/interface/alerts');
});