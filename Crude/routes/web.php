<?php

use App\Http\Controllers\CrudeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('crudepages.index');
// });

Route::get('/home',[CrudeController::class,'index'])->name('home.index');
Route::get('/pages/forms',[CrudeController::class,'create'])->name('form');
Route::post('/pages/forms',[CrudeController::class,'store'])->name('store');
Route::get('/home/{id}/view',[CrudeController::class,'show'])->name('edit');
Route::get('/home/{id}/edit',[CrudeController::class,'edit'])->name('edit');
Route::post('/home/{id}/edit',[CrudeController::class,'update'])->name('update');
Route::get('/home/{id}/delete',[CrudeController::class,'destroy'])->name('edit');


