<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Creamos las rutas API
Route::apiResource('/product', ProductController::class);
