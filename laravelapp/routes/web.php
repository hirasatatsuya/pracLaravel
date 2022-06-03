<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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


Route::get('home', [TasksController::class, 'ShowListWD'])->name('task.index');
Route::get('task/create', [TasksController::class, 'ShowTaskRegisterWD'])->name('task.create');
Route::post('task/store', [TasksController::class, 'TaskRegister'])->name('task.store');
Route::get('task/show', [TasksController::class, 'ShowTaskWD'])->name('task.show'); 
Route::get('task/edit', [TasksController::class, 'ShowTaskEditWD'])->name('task.edit');
Route::post('task/update', [TasksController::class, 'TaskEdit'])->name('task.update');
Route::delete('task/destroy', [TasksController::class, 'destroy'])->name('task.destroy');

Route::get('scss', function () {
    return view('for-scss');
});
// Route::get('hello', 'HelloController@index'); 誤