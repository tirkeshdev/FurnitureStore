<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $discounts_count = Product::where('discount_percent' ,'>',0)
            ->count();

        $discount_products = Product::where('discount_percent' ,'>',0)
            ->take(9)
            ->get();


        $builts_count = Product::where('built' , true)
            ->count();

        $built_products = Product::where('built' , true)
            ->take(9)
            ->get();


        return view('home.index')
            ->with([
                'discount_products' => $discount_products,
                'discounts_count' => $discounts_count,
                'builts_count' => $builts_count,
                'built_products' => $built_products,
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
