<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::redirect('/', '/en');
Route::group(['prefix'=>'{language}'], function(){

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::post('/products/store', [IndexController::class, 'store'])->name('productStore');
});
