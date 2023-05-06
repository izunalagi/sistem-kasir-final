<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $products = Product::all();
        $details = Transaction::find($id);
        return view('checkout.index', compact('details', 'products'));
    }

    public function create(Request $request)
    {
        $products = Product::find($request->product_id);
        $total_price = 0;
        $total_price += $products->price * $request->qty;

        $create = Checkout::create([
            'product_id' => $request->product_id,
            'total' => $total_price,
            'qty' => $request->qty,
            'transaction_id' => $request->transaction_id,
        ]);

        return back();
        //    return redirect()->route('checkout.index.'. $request->transaction_id);
    }

    public function checkout(Request $request, $id)
    {
        $details = Transaction::find($id);
        foreach ($details->fkTransactionDetail as $item) {
            $simpan = Product::find($item->product_id);
            $simpan->update([
                'stocks' => $simpan->stocks - $item->qty,
            ]);
        }
        $details->update([
            'status' => '1',
        ]);
        return back();
    }

    public function update_cart($cart, Request $request)
    {
        $cart->update([
            'price' => $request->price,
        ]);

        return redirect('checkout.index');
    }

    public function destroy($id)
    {
        $ganti = Checkout::find($id);
        if ($ganti != null) {
            $ganti->delete();
            return back();
        }
    }
}
