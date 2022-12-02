<?php

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
    return view('/views/start');
});


Route::get('/views/start', [App\Http\Controllers\StartController::class, 'index'])->name('views.start');
Route::get('/adultPeople',[\App\Http\Controllers\adultPeopleController::class,'index'])->name('views.adultPeople');
Route::get('/kids',[\App\Http\Controllers\KidsController::class,'index'])->name('views.kids');
Route::post('/adultPeople/check', [\App\Http\Controllers\adultPeopleController::class,'check'])->name('adultPeople.check');

