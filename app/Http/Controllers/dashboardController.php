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
        // dd($product->all()->toJson(JSON_PRETTY_PRINT));
         return view("admin.product.product",[
            "paginateRroducts" => $product->paginate(10),
            "allProducts" => $product->all(),
            "totalProduct" => $product->where('visibility','public')->count(),
            'productInventory' => $product->count(),
            'averagePrice' => $product->avg("price")
         ]);    
    }

    public function customers() {
        // dd(User::role("customer")->get()->toJson(JSON_PRETTY_PRINT));
        return view("admin.customers.index", [
            'customers' => User::role("customer")->get()->toJson(JSON_PRETTY_PRINT)
        ]);
    }

    public function users() {
            return view("admin.user.index", [
                'users' => User::all()
            ]);
    }
}
