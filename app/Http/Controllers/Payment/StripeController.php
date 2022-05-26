<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Stripe;

class StripeController extends Controller
{
 
    public function stripe(){
        return view('products.stripe');
    } // End Method


    public function stripePost(Request $request){

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            'amount' => 100*100,
            'currency' => "usd",
            'source' => $request->stripeToken,
            'description' => 'Test payment from Riyad Salem'
        ]);

        Session::flash('success','Payment has been successfully');
        return redirect()->back();

    } // End Method

    
}
