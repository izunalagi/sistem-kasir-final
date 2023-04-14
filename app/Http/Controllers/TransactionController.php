<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
    $transactions = Transaction::all();
    return view('transaction.index', compact('transactions'));
    }
}
