<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route ::get("/" , [DemoController::class , "index"]);

Route ::get ("/hello", "App\Http\Controllers\DemoController@hello");

Route ::get ("/singleAction" , SingleActionController::class);

Route ::resource("/photo" , ResourceController::class);

Route :: get("/register" , [FormController::class ,"index"]);

Route :: post("/register" , [FormController::class , "register"]);