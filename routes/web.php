<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/' , [AgencyController::class , 'show'])->name('show');
Route::get('/create' , [AgencyController::class , 'create'])->name('create');
Route::post('/create' , [AgencyController::class , 'store'])->name('store');
Route::get('{id}/delete' , [AgencyController::class , 'destroy'])->name('delete');
Route::get('{id}/edit' , [AgencyController::class , 'edit'])->name('edit');
Route::post('{id}/edit' , [AgencyController::class , 'update'])->name('update');
Route::get('search' , [AgencyController::class , 'search'])->name('search');
