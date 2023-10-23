<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $id)
            ->paginate(12);


        return view('product.index', ['products' => $products, 'category' => $category]);
    }


    public function show($id)
    {

        $product = Product::findOrFail($id);


        return view('product.show', ['product' => $product]);
    }

    public function discounts()
    {
        $products = Product::where('discount_percent', '>', 0)
            ->paginate(12);

        return view('product.discounts')
            ->with([
                'products' => $products,
            ]);
    }

    public function builts()
    {
        $products = Product::where('built', true)
            ->paginate(12);

        return view('product.builts')
            ->with([
                'products' => $products,
            ]);
    }
}
