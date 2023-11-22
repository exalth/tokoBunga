<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/katalog',[KatalogController::class,'index']);
Route::get('/katalog/create',[KatalogController::class,'create']);
Route::post('/katalog/store',[KatalogController::class,'store']);
Route::get('/katalog/{id}/edit',[KatalogController::class,'edit']);
Route::put('/katalog/{id}',[KatalogController::class,'update']);
Route::delete('/katalog/{id}',[KatalogController::class,'destroy']);
