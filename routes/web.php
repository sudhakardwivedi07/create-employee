<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ClientController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [EmployeeController::class, 'index']);
// Route::get('/employees', [EmployeeController::class, 'index']);
// Route::get('/employees/create', [EmployeeController::class, 'create']);
// Route::post('/employees', [EmployeeController::class, 'store']);

// Route::get('/colleges', [CollegeController::class, 'index']);
// Route::get('/colleges/create', [CollegeController::class, 'create']);
// Route::post('/colleges', [CollegeController::class, 'store']);

Route::resource('clients', ClientController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('colleges', CollegeController::class);
