<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class dashboardController extends Controller
{

    public function index()
    {
        // dd(Str::of(5)->monthName('id'));
        // dd(Carbon::parse('2024-5')->locale('id')->monthName);
        // $visitor = Visitor::select(
        //     DB::raw("YEAR(created_at) as tahun"),
        //     DB::raw("MONTH(created_at) as bulan"),
        //     DB::raw("COUNT(ip_address) as ip")
        // )
        //     ->whereYear("created_at", now()->year)
        //     // ->where("tahun",now()->year)
        //     ->groupBy('bulan')
        //     ->orderBy("bulan")
        //     ->get();

        $visitor = Visitor::select(
            DB::raw("YEAR(created_at) as tahun"),
            DB::raw("MONTH(created_at) as bulan"),
            DB::raw("COUNT(ip_address) as ip"),
        )
            ->whereYear("created_at", now()->year)
            ->groupBy('bulan','tahun')
            ->orderBy("bulan")
            ->get();

        $visitorData = $visitor->map(function ($result) {
            return [
                'bulan' => Carbon::parse($result->tahun . '-' . $result->bulan)->locale("id")->monthName,
                'ip'    => $result->ip
            ];
        });

        // dd($visitorData);
        return view("admin.index", [
            'totalProduct' => product::where("visibility", 'public')->count(),
            'totalVisitor' => Visitor::count(),
            'visitorData' => $visitorData
        ]);
    }

    public function product(product $product)
    {
        // dd($product->all()->toJson(JSON_PRETTY_PRINT));
        return view("admin.product.product", [
            "paginateRroducts" => $product->paginate(10),
            "allProducts" => $product->all(),
            "totalProduct" => $product->where('visibility', 'public')->count(),
            'productInventory' => $product->count(),
            'averagePrice' => $product->avg("price")
        ]);
    }

    public function customers()
    {
        // dd(User::role("customer")->get()->toJson(JSON_PRETTY_PRINT));
        return view("admin.customers.index", [
            'customers' => User::role("customer")->get()->toJson(JSON_PRETTY_PRINT)
        ]);
    }

    public function users()
    {
        return view("admin.user.index", [
            'users' => User::all()
        ]);
    }
}
