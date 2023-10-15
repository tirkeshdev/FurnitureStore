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

        $categories = Category::where('parent_id', null)
            ->get();

        $categorySubs = [];
        foreach ($categories as $category) {
            $categorySubs[] = [
                'category' => $category,
                'subs' => Category::where('parent_id', $category->id)
                    ->withCount('products')
                    ->get(),
            ];
        }

        return view('product.show', ['product' => $product,'categorySubs' => $categorySubs,]);
    }

    public function discounts() {
        $products = Product::where('discount_percent' ,'>',0)
            ->get();

        return view('product.discounts')
            ->with([
                'products' => $products,
            ]);
    }
}
