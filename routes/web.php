<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\CustomersController;


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
    return view('index');
});

Route::get('/faktury',[InvoicesController::class,'index'])->name('invoices.index');

Route::get('/faktury/dodaj',[InvoicesController::class,'create'])->name('invoices.create');
Route::post('/faktury/zapisz',[InvoicesController::class,'store'])->name('invoices.store');
Route::get('/faktury/edytuj/{id}',[InvoicesController::class,'edit'])->name('invoices.edit');
Route::put('/faktury/zmień/{id}',[InvoicesController::class,'update'])->name('invoices.update');
Route::delete('faktury/usun/{id}',[InvoicesController::class,'delete'])->name('invoices.delete');

 Route::resource('klienci',CustomersController::class,['names'=>'customers']);