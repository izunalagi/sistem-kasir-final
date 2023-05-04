<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     public function index(Request $request)
     {
     $checkouts = Checkout::all();
     return view('checkout.index', compact('checkouts'));
     }
}
