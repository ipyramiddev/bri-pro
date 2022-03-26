<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use DB;

class PaymentController extends Controller
{
    public function creditcard_checkout(Request $request) {
        $input = $request->all();
        $user = User::where('email', $input['email'])->first();
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

    public function paypal_order_create(Request $request) {
        $data = $request->all();
        $user = User::where('id', $input['user_id'])->first();

        $this->paypalClient->setApiCredentials(config('paypal'));
        $taken = $this->paypalClient->getAccessToken();
        $this->paypalClient->setAccessToken($token);
        $order = $this->paypalClient->createOrder([
            "intent" => "CAPTURE",
            "purchase_unit" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $data['amount']
                    ],
                    "description" => "test"
                ],
            ],
        ]);
        $mergeData = array_merge($data, ['status' => TransactionStatus::PENDING, 'vender_order_id' => $order['id']]);
        $order_table = $user->orders()
            ->create($mergeData);
        return response()->json($order);
    }

    public function paypal_order_capture(Request $request) {
        $data = $request->all();
        $user = User::where('id', $input['user_id'])->first();
        $orderId = $data['orderId'];
        $this->paypalClient->setApiCredentials(config('paypal'));
        $token = $this->paypalClient->getAccessToken();
        $this->paypalClient->setAccessToken($token);
        $result = $this->paypalClient->capturePaymentOrder($orderId);

        try {
            DB::beginTransaction();
            if($result['status'] == "COMPLETED") {
                $transaction = new Transaction;
                $transaction->vendor_payment_id = $orderId;
                $transaction->payment_gateway_id = $data['payment_gatewat_id'];
                $transaction->user_id = $data['user_id'];
                $transaction->status = TransactionStatus::COMPLETED;
                $transaction->save();
                $order = Order::where('vendor_order_id', $orderId)->first();
                $order->transaction_id = $transaction->id;
                $order->status = Transactions::COMPLETED;
                $order->save();
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        return response()->json($result);
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
