<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;
use Session;
use Redirect;

class PaymentController extends Controller
{
    public function payWithRazorpay()
    {
        $book = Book::join('packges', 'packges.id', '=', 'books.packageId')
            ->orderBy('id', 'desc')
            ->first(['books.*', 'packges.price']);

        return view('payment', \compact('book'));
    }

    public function payment(Request $request)
    {
        $input = $request->all();
        $userId = Auth::user()->id;

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $payment->capture(array('amount' => $payment['amount']));
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }
        $payInfo = [
            'payment_id' => $request->razorpay_payment_id,
            'user_id' => $userId,
            'amount' => $payment['amount'],
        ];

        Payment::insertGetId($payInfo);

        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }
}
