<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', 'App\Http\Controllers\User@select'); //paginação model
Route::get('userR', 'App\Http\Controllers\User@modelResources'); //paginação model com resource view
Route::get('raw', 'App\Http\Controllers\User@raw'); //paginação raw query
Route::get('rawR', 'App\Http\Controllers\User@rawResources'); //paginação raw query com resource view