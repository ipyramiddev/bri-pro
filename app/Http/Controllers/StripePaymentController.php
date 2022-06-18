<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClinet;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Order;
use Mail;
use App\Mail\payment_confirm_send;
use App\Models\Transaction;
use App\Models\Customer_purchase;
use DB;
use GuzzleHttp\Client;

class StripePaymentController extends Controller
{
    
}
