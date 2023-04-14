<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    $products = Product::all();
    return view('product.index', compact('products'));
    }

    public function create(Request $request)
    {
    return view('product.create');
    }

    public function store(Request $request)
    {
    $file = $request->file('photo');
    $filename = time() . '.' .
    $file->getClientOriginalExtension();

    $photo_path = $request->file('photo')->storeAs('public/products',$filename);
    $photo_path = str_replace('public/','',$photo_path);

    $products = Product::create([
    'name' => $request->name,
    'price' => $request->price,
    'stocks' => $request->stocks,
    'photo' => $photo_path
    ]);

    return redirect()->route('product.index')->with('success', 'Data Berhasil Diubah');

    }

    public function edit($id)
    {
    $ganti = Product::find($id);
    return view('product.edit',compact(['ganti']));
    }

    public function update($id, Request $request)
    {

    $file = $request->file('photo');
    $filename = time() . '.' .
    $file->getClientOriginalExtension();

    $photo_path = $request->file('photo')->storeAs('public/products',$filename);
    $photo_path = str_replace('public/','',$photo_path);

    $ganti = Product::find($id);
    $ganti->name = $request->name;
    $ganti->price = $request->price;
    $ganti->stocks = $request->stocks;
    $ganti->photo = $photo_path;
    $ganti->save();
    return redirect()->route('product.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
    $ganti =Product::find($id);
    try {
    Storage::delete('public/'.$ganti->photo);
    $ganti->delete();

    } catch (\Throwable $th){

    }
    $ganti->delete();
    return redirect()->route('product.index')->with('success', 'Data Berhasil Dihapus');
    }

}
