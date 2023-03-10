<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseReportController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/expense_reports', ExpenseReportController::class);

Route::get('/expense_reports/{id}/confirmDelete',[ExpenseReportController::class, 'confirmDelete']);

Route::get('/expense_reports/{id}/confirmSendMail',[ExpenseReportController::class, 'confirmSendMail']);
Route::post('/expense_reports/{id}/sendMail',[ExpenseReportController::class, 'sendMail']);

Route::get('/expense_reports/{expense_report}/expenses/create',[ExpenseController::class, 'create']);

Route::post('/expense_reports/{expense_report}/expenses',[ExpenseController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/company') ->group(function(){
    Route::get('/us', [HomeController::class, 'us']);
    Route::get('/form', [HomeController::class, 'form']);
});

Auth::routes();