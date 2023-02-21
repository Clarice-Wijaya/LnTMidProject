<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', [EmployeeController::class, 'show'])->name('employee');

Route::get('/addemployee',  [EmployeeController::class, 'viewAddEmployee']) ->name('addemployee');
Route::post('/addemployeepost',[EmployeeController::class, 'add'] )->name('addemployeepost');

Route::get('/updateemployee/{id}',  [EmployeeController::class, 'updateview']) ->name('updateview');
Route::patch('/updatedata/{id}',[EmployeeController::class, 'updatedata'] )->name('updatedata');


Route::delete('/delete/{id}',[EmployeeController::class, 'deleteemployee'])->name('deleteemployee');