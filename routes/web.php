<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to the controlller
Route::get('/', [PartsController::class, 'index']);

// Retrieves database data
Route::get('view-records', 'PartsController@index');