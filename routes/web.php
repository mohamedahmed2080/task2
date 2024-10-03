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
    return view('welcome');
});

use App\Http\Controllers\ManagerAuthController;

Route::get('manager/register', [ManagerAuthController::class, 'showRegisterForm']);
Route::post('manager/register', [ManagerAuthController::class, 'register']);

Route::get('manager/login', [ManagerAuthController::class, 'showLoginForm']);
Route::post('manager/login', [ManagerAuthController::class, 'login']);

Route::post('manager/logout', [ManagerAuthController::class, 'logout']);

use App\Http\Controllers\EmployeeController;

    Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

