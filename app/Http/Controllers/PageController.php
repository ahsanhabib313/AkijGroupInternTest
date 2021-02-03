<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_price' => 'required',
            'expire_date' => 'required'
        ]);
        Product::create($request->all());
        $request->session()->flash('success', 'Created successfully');
        return redirect()->route('product.create');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_price' => 'required',
            'expire_date' => 'required'
        ]);

        $product = Product::findOrFail($id);

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->expire_date = $request->expire_date;
        $product->save();
        $request->session()->flash('success', 'Updated successfully');
        return redirect()->route('home');

    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        session()->flash('success', 'Deleted successfully');
        return redirect()->route('home');
    }

    public function filter(Request $request)
    {
        $date = $request->date;
        $price = $request->price;

        if (is_null($date)) {
            $products = Product::where('product_price', '=', $price)
                ->get();
        } else if (is_null($price)) {
            $products = Product::where('expire_date', '>=', $date)->get();
        } else {
            $products = Product::where('product_price', '=', $price)
                ->where('expire_date', '>=', $date)
                ->get();
        }

        $request->session()->flash('date', $date);
        $request->session()->flash('price', $price);

        return view('index', compact('products'));

    }


}
