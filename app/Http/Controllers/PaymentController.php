<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class PaymentController extends Controller
{
    public function creditcard_checkout(Request $request) {
        $input = $request->all();
        try {
            $payment = $user->charge(
                $input['amount'],
                $input['payment_method_id']
            );

            $payment = $payment->asStripePaymentIntent();

            $order = $user->orders()
                ->create([
                    'transaction_id' => $payment->charges->data[0]->id,
                    'price' => $payment->charges->data[0]->amount
                ]);

            return $order;

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function paypal_checkout(Request $request) {
        print_r($request->all());
    }

    public function transfer_checkout(Request $request) {
        print_r($request->all());
    }

    public function furikomi_checkout(Request $request) {
        print_r($request->all());
    }

    public function dealer_application_checkout(Request $request) {
        print_r($request->all());
    }
}
