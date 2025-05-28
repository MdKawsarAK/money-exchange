<?php

use App\Http\Controllers\inventory\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard.homePage');
});
Route::resource('/products', ProductController::class);