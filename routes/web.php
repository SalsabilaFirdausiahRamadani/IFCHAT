<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// routes/web.php


Route::resource('user', ProductController::class);
