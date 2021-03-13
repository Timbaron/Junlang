<?php

use App\Http\Controllers\LangController;
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

Route::get('/', function () {
    return view('convert');
});

Route::get('/convert',[LangController::class, 'convertCreate'])->name('convert.create');
Route::get('/revert',[LangController::class, 'revertCreate'])->name('revert.create');
Route::post('/convert',[LangController::class,'convert'])->name('convert');
Route::post('/revert',[LangController::class,'revert'])->name('revert');
