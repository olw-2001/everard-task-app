<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

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

// Route to the controlller function that returns the view blade
Route::get('/', [PartController::class, 'index']);

// Inserting data
Route::post('insPartData', [PartController::class, 'insPart']);

// Would've been for updating data, but couldn't get it working 
// Route::get("update", [PartController::class, 'updateData']);

// Deleting data
Route::get('delete/{id}', [PartController::class, 'delete']);