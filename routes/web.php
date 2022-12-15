<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
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


//Du keliai

//Studento keliai
Route::get('/students/index',[StudentController::class, 'index'])->name('students.index');

Route::get('/groups/index', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/show/{group}', [GroupController::class, 'show'])->name('groups.show');