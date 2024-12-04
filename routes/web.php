<?php

use App\Http\Controllers\EmployeeController;
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

// Route::get('/employees', function () {
//     return view('employees/index');
// });
Route::get('/',  [EmployeeController::class, 'index'] ) -> name('employees.index');
Route::get('employees/{id}/show', [EmployeeController::class,'show'] ) -> name('employees.show') ;

Route::get('employees/create', [EmployeeController::class,'create'] ) -> name('employees.create') ;
Route::post('/employees', [EmployeeController::class,'store'] ) -> name('employees.store') ;

Route::get('/employees/{id}/edit', [EmployeeController::class,'edit'] ) -> name('employees.edit') ;
Route::post('/employees/update', [EmployeeController::class,'update'] ) -> name('employees.update') ;
Route::delete('employees/destroy', [EmployeeController::class,'destroy'] ) -> name('employees.destroy') ;