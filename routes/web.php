<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
    return view('mainPc');
});

Route::get('/time', function () {
    return view('todos.time');
});

Route::get('/inside', function () {
    return view('todos.time');
})->name('todos');;

//Route::get('/inside', [TodosController::class, '__invoke'])->name('todos');
//Route::post('/inside', [TodosController::class, '__invoke'])->name('todos');