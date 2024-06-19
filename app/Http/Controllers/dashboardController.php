<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function index()
    {
        return view("admin.index");
    }

    public function product(product $product) {
         return view("admin.product.product",[
            "products" => $product->all(),
            "totalProduct" => $product->where('visibility','public')->count(),
            'productInventory' => $product->count(),
            'averagePrice' => $product->avg("price")
         ]);    
    }

    public function users() {
            return view("admin.user.index", [
                'users' => User::all()
            ]);
    }
}
