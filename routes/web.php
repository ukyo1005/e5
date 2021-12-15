<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MwController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SupportController;


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

Route::get('/', [IndexController::class, 'index']);
Route::get('/thanks', [ThanksController::class, 'index']);
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/confirm', [ConfirmController::class, 'index']);
Route::get('/consulting', [ConsultingController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);
Route::get('/job', [JobController::class, 'index']);
Route::get('/jobDetail', [JobDetailController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/mw', [MwController::class, 'index']);
Route::get('/privacy', [PrivacyController::class, 'index']);
Route::get('/sales', [SalesController::class, 'index']);
Route::get('/sample', [SampleController::class, 'index']);
Route::get('/support', [SupportController::class, 'index']);
