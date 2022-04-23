<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return view('email.agency_email_send')
//                         ->with([
//                             'id' => '3',
//                             'status' => 'pending',
//                             'message' => 'afwefawefaweawef',
//                             'transaction_con' => 'awfeawefawefawefawe',
//                             'deposit_amount' => 'gawleiuhawlefiuawehlfiauwehf'
//                         ]);
// });

Route::get('/user/agency/accept/{id}', [AgencyController::class, 'accept']);
Route::get('/user/agency/reject/{id}', [AgencyController::class, 'reject']);

