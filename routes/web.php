<?php

use App\Http\Controllers\FormController;
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
    return view('welcome');
});
Route::post('form1',[FormController::class,'Form1']);
Route::post('form2',[FormController::class,'Form2']);
Route::post('lastform',[FormController::class,'FinalForm']);
Route::get('form1_show',[FormController::class,'Form1Show']);
Route::get('form2_show',[FormController::class,'Form2Show']);
Route::get('finaleForm_show',[FormController::class,'FinaleForm_show']);
