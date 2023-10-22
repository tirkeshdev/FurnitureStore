<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function show($id)
    {

        $seller = Seller::findOrFail($id);

//        $seller_products = Product::where('sellers');


        return view('sellers.show',
            ['seller' => $seller,]);
    }
}
