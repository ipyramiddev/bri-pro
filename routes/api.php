<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/login', [FrontendController::class], 'index');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('user', [UserController::class, 'current']);

    Route::patch('settings/profile', [ProfileController::class, 'update']);
    Route::patch('settings/password', [PasswordController::class, 'update']);
    //fetch users
    Route::get('get/users', [AdminController::class, 'fetch_users']);
    Route::get('get/user/{id}', [AdminController::class, 'fetch_user_id']);
    //Application
    Route::get('get/applications', [AdminController::class, 'fetch_applications']);
    Route::post('application/create', [AdminController::class, 'application_create']);

    Route::post('user/role_update/{id}', [AdminController::class, 'user_role_update']);

    //Get others Datas
    Route::get('get/ias/cat_id', [FrontendController::class, 'get_ias_cat_id']);
    Route::get('get/checkout/category/{app_id}/{cat_id}', [FrontendController::class, 'get_checkout_category']);

    //payment and checkout apis
    Route::post('payment/stripe/checkout/send', [PaymentController::class, 'stripe_checkout']);
    Route::post('payment/paypal/checkout/send', [PaymentController::class, 'paypal_checkout']);
    Route::post('payment/transfer/checkout/send', [PaymentController::class, 'transfer_checkout']);
});

Route::group(['middleware' => 'guest:api'], function () {
    
    Route::post('login', [LoginController::class, 'login']);
    Route::post('customerregister', [RegistrationController::class, 'customerRegister']);
    Route::post('agencyregister', [RegistrationController::class, 'agencyRegister']);

    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::post('password/reset', [ResetPasswordController::class, 'reset']);

    Route::post('email/verify/{user}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend']);

    Route::post('oauth/{driver}', [OAuthController::class, 'redirect']);
    Route::get('oauth/{driver}/callback', [OAuthController::class, 'handleCallback'])->name('oauth.callback');
});
