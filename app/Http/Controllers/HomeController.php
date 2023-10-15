<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
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
        $discounts_count = Product::where('discount_percent' ,'>',0)
            ->count();

        $discount_products = Product::where('discount_percent' ,'>',0)
            ->take(9)
            ->get();


        return view('home.index')
            ->with([
                'categorySubs' => $categorySubs,
                'discount_products' => $discount_products,
                'discounts_count' => $discounts_count,
            ]);
    }






    public function locale($locale)
    {
        if ($locale == 'en') {
            session()->put('locale', 'en');
            return redirect()->back();
        } elseif ($locale == 'ru') {
            session()->put('locale', 'ru');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
