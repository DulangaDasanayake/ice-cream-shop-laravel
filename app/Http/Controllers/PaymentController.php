<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payment()
    {
        return view('payment');
    }

    public function verify_payment(Request $request, $transaction_id)
    {
        $request->session()->put('transaction_id', $transaction_id);
        return redirect('/complete_payment');
    }

    public function complete_payment(Request $request)
    {

        if ($request->session()->has('order_id') && $request->session()->has('transaction_id')) {

            $order_id = $request->session()->get('order_id');
            $transaction_id = $request->session()->get('transaction_id');
            $order_status = 'paid';
            $payment_date = date('Y-m-d h:i:s'); //store exact time

            $affected = DB::table('orders')
                ->where('id', $order_id)
                ->update(['status' => $order_status]);

            //store payment info in payments table
            DB::table('payments')->insert([
                'order_id' => $order_id,
                'transaction_id' => $transaction_id,
                'date' => $payment_date,
            ]);

            //remove everything from session
            $request->session()->flush();
            return redirect('thank_you')->with('order_id', $order_id);

        } else {
            return redirect('/');
        }

    }

    //thank you function
    public function thank_you()
    {
        return view('thank_you');
    }

}
