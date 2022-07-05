<?php

use App\Http\Livewire\Admin\Pages\Department\Department;
use App\Http\Livewire\Admin\Pages\LeaveType\LeaveType;
use App\Http\Livewire\Admin\Pages\Employee\Employee;

use App\Http\Livewire\Employee\Pages\ApplyLeave\Index as ApplyLeave;
<<<<<<< HEAD
use App\Http\Livewire\Employee\Pages\MyLeaves\Index as MyLeaves;
=======
use App\Http\Livewire\Employee\Pages\MyLeave\Index as MyLeave;
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
	'admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

	Route::prefix('admin')->group(function () {
		Route::get('/department', Department::class)->name('admin.department');
		Route::get('/leave-type', LeaveType::class)->name('admin.leaveType');
		Route::get('/manage-employee', Employee::class)->name('admin.manageEmployee');
	});
});

Route::middleware([ 'employee' ])->group(function () {
	Route::prefix('employee')->group(function () {
		Route::get('/dashboard', function () {
			return view('dashboard');
		})->name('employee.dashboard');

		Route::get('/apply-leave', ApplyLeave::class)->name('employee.applyLeave');
<<<<<<< HEAD
		Route::get('/my-leaves', MyLeaves::class)->name('employee.myLeaves');
=======
		Route::get('/my-leave', MyLeave::class)->name('employee.myLeave');
>>>>>>> f8dabf0138f06acc6f6c775aae34aaf5dee07cd4
	});
});
