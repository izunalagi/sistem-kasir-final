<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     public function index(Request $request, $id)
     {
     $checkouts = Checkout::all();

     $transactions = Transaction::all();
     $ganti = Transaction::find($id);
     return view('checkout.index', compact('checkouts', 'transactions', 'ganti',));
     }

     // public function create()
     // {
          
     //      return view('checkout.create');
     // }
}
