<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/empresas/{empresa}/empleados/{empleado}',
    [PruebaController::class, 'buscaempleado']);
Route::get('/empleado/{empleado}',
    [PruebaController::class, 'verempleado']);
Route::get('/empresas',
[PruebaController::class, 'verempresas']);
Route::get('/empleados',
    [PruebaController::class, 'verempleados']);
