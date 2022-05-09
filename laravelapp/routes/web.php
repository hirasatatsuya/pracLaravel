<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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


Route::get('hello', [HelloController::class, 'index'])->name('hello.index');
// Route::post('hello', [HelloController::class, 'post']);
Route::get('hello/create', [HelloController::class, 'create'])->name('hello.create');
Route::post('hello/store', [HelloController::class, 'store'])->name('hello.store');
Route::get('hello/edit', [HelloController::class, 'edit'])->name('hello.edit');
Route::post('hello/update', [HelloController::class, 'update'])->name('hello.update');
Route::delete('hello/destroy', [HelloController::class, 'destroy'])->name('hello.destroy');
Route::get('scss', function () {
    return view('for-scss');
});
// Route::get('hello', 'HelloController@index'); 誤