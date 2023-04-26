<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payroll;
use App\Http\Controllers\Items;
use App\Http\Controllers\SubItems;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReceiptController;

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
    return view('auth.login');
});

Route::get('/in', function () {
    return view('payroll.invoice');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\Payroll::class, 'index'])->name('home');
Route::get('/payroll/{id}', [App\Http\Controllers\PayrollDisplay::class, 'display'])->name('payroll.details');
Route::get('/edit/{id}', [App\Http\Controllers\PayrollDisplay::class, 'edit'])->name('payroll.edit');
//Route::get('/payroll/update', [App\Http\Controllers\PayrollDisplay::class, 'update'])->name('payroll.update');
//Route::post('/edit/update/', 'Trips@UpdateTrips')->name('update');
Route::get('/payrolls', [App\Http\Controllers\PayrollDisplay::class, 'view'])->name('payroll.payment');
Route::post('/payrolls', [App\Http\Controllers\PayrollDisplay::class, 'store'])->name('payroll.store');
Route::post('/payrolls', [App\Http\Controllers\PayrollDisplay::class, 'store'])->name('payroll.store');
Route::get('/employee/{id}', [App\Http\Controllers\PayrollDisplay::class, 'createPDF'])->name('employee.pdf');

Route::get('/payroll', function () {
    return view('payroll.createPayroll');
});


Route::resource('pay', Payroll::class);
Route::resource('items', Items::class);
Route::resource('subitems', SubItems::class);
Route::resource('masters', MasterController::class);
Route::resource('ledger', LedgerController::class);
Route::resource('trip', TripController::class);
Route::resource('clients', ClientController::class);
Route::resource('receive', ReceiptController::class);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
