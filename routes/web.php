<?php

use App\Http\Controllers\CalculateController;
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
//    return view('calculate');
//});

Route::get('/', [CalculateController::class, 'getCalculate'])->name('calculate');
Route::post('/', [CalculateController::class, 'getResult'])->name('calculate.result');
