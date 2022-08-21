<?php

use App\Http\Controllers\ServeController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ControllerTransfer;
use App\Http\Controllers\IndexController;



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


Route::get('serve',[ServeController::class,'index'])->name('serves');
Route::get('serve/create',[ServeController::class,'create'])->name('serve.create');
Route::get('serve/delete/{id}',[ServeController::class,'delete'])->name('serve.delete');

//Route::post('serve/store',[ServeController::class,'store'])->name('serve.store');
Route::post('serve/store',[MaintenanceController::class,'store'])->name('Maintenance.store');
Route::post('serve/store/transfer',[ControllerTransfer::class,'store'])->name('transfer.store');


//Route::post('serve/store/index',[IndexController::class,'store'])->name('index.store');



Route::get('serve/form',[ServeController::class,'form'])->name('serve.form');

Route::post('serve/final/form',[IndexController::class,'store'])->name('serve.store');
Route::get('serve/final/form',[ServeController::class,'finalform'])->name('serve.finalform');
//Route::get('serve/delete/{id}',[serveController::class,'delete'])->name('serve.delete');

Route::view('/parent',  'parent')->name('parent');

Route::get('maintenance/show/{id}',[ServeController::class,'show'])->name('serve.show');

Route::get('serve/show/form/{id}',[ServeController::class,'showform'])->name('serve.showform');

Route::get('serve/show/finalform/{id}',[ServeController::class,'showfinalform'])->name('serve.showfinalform');

Route::get('serve/search',[ServeController::class,'search'])->name('serve.search');
