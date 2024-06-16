<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function product(product $product) {
         return view("admin.product.product",[
            "products" => $product->all(),
            "totalProduct" => $product->where('visibility','public')->count(),
            'productInventory' => $product->count(),
            'averagePrice' => $product->avg("price")
         ]);    
    }
}
