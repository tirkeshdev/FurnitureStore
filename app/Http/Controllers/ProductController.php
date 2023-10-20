<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {

        $product = Product::findOrFail($id);


        return view('product.show', ['product' => $product]);
    }

    public function discounts() {
        $products = Product::where('discount_percent' ,'>',0)
            ->get();

        return view('product.discounts')
            ->with([
                'products' => $products,
            ]);
    }
    public function builts() {
        $products = Product::where('built', true)
            ->get();

        return view('product.builts')
            ->with([
                'products' => $products,
            ]);
    }
}
