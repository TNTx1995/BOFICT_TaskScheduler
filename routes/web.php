<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\EmployeeController;
use App\http\Controllers\Admin\CommonTaskController;
use App\Http\Controllers\Admin\TaskScheduleController;
use App\Http\Controllers\Admin\TaskController;
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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::get('/redirects',[CommonTaskController::class,'redirectUser']); 

Route::middleware(['auth:sanctum'])->group(function(){
     Route::prefix('admin')->group(function(){
        Route::resource('employees',EmployeeController::class);
        Route::resource('tasks',TaskScheduleController::class);
        Route::resource('assigntasks',TaskController::class);
      });
  });



Route::get('/user/logout',[CommonTaskController::class,'logout'])->name('commonTask.logout');
