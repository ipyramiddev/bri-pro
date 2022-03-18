<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    public function stripe_checkout(Request $request) {
        print_r($request->all());
    }

    public function paypal_checkout(Request $request) {
        print_r($request->all());
    }

    public function transfer_checkout(Request $request) {
        print_r($request->all());
    }

    public function dealer_application_checkout(Request $request) {
        print_r($request->all());
    }
}
