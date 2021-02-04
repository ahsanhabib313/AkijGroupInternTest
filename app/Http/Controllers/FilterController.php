<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        $date = $request->date;
        $price = $request->price;
      //  return $date." ".$price;

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
