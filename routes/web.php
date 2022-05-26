<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\CompaniasController;



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

Route::get('/', [AuthController::class, 'show'])->name('login.get');
Route::post('/', [AuthController::class, 'login'])->name('login.post');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/logout', [LogoutController::class, 'logout'])->name('logout');



Route::controller(CompaniasController::class)->group( function(){
    Route::get('home/companias', 'index')->name('companias');
    Route::get('home/addcompanias', 'addCompanias')->name('add-companias');
    Route::post('home/addcompanias', 'store')->name('companias.store');
    Route::get('home/editcompanias/{id}', 'edit')->name('edit-companias');
    Route::put('home/{id}/updatecompany', 'update')->name('update-companias');
    Route::delete('home/companias/{id}', 'destroy')->name('companias.destroy');
});

Route::controller(EmpleadosController::class)->group( function(){
    Route::get('home/empleados', 'index')->name('empleados');
    Route::get('home/addempleados', 'addEmpleados')->name('add-empleados');
    Route::post('home/addempleados', 'store')->name('empleados.store');
    Route::get('home/editempleados/{id}', 'edit')->name('edit-empleados');
    Route::put('home/{id}/updateempleado', 'update')->name('update-empleados');
    Route::delete('home/empleados/{id}', 'destroy')->name('empleados.destroy');
});

