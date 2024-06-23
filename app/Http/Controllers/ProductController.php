<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::where("visibility","public")->get();

        return view("product.index", [
            'products' => $products
        ]);
    }


    public function index_dashboard() {
          return view("admin.product.product");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(category $category)
    {
        $category = $category->all(); 
          return view("admin.product.create", [
            "category" => $category
          ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('price'));
        $validate = $request->validate([
            'name' => 'required',
            'year' =>  'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'tipe_mesin' => 'required',
            'kopling' => 'required',
            'busi' => 'required',
            'sistem_bahan_bakar' => 'required',
            'tipe_rangka' => 'required',
            'ukuran_ban_belakang' => 'required',
            'ukuran_ban_depan' => "required",
            'sistem_pengereman' => 'required',
            'images' => ['required',File::types(['jpeg','png','jpg'])->max('2mb')]
        ]);

        $product = new product;

        $product->fill($validate);
        $product->visibility = $request->input("visibility") ? 'public' : 'private';
        $product->category_id = $request->input('category');


        $path = $request->file("images")->store("product",'public') ;

       $product->images = $path;

       $product->save();

        return back()->with("status", " succesfully create product");

    }


    /**
     * Display the specified resource.
     */
    public function show(product $product, string $id)
    {
       return view("product.product", [
        'product' => $product->findOrFail($id),

       ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product, string $id)
    {
         // $productEdit = $product->findOrFail($id);
         return view("admin.product.edit",[
            'product' => $product->findOrFail($id),
            'category' => category::all()
         ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $validate = $request->validate([
            'name' => 'required',
            'year' =>  'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'tipe_mesin' => 'required',
            'kopling' => 'required',
            'busi' => 'required',
            'sistem_bahan_bakar' => 'required',
            'tipe_rangka' => 'required',
            'ukuran_ban_belakang' => 'required',
            'ukuran_ban_depan' => "required",
            'sistem_pengereman' => 'required',
            'images' =>  $request->file("images") ? [File::types(['jpeg','png','jpg'])->max('2mb')] : ''
        ]);

        $updateProduct = product::find($request->input("product_id"));

        $updateProduct->fill($validate);
        $updateProduct->visibility = $request->input("visibility") ? 'public' : 'private';
        $updateProduct->category_id = $request->input('category');

        if($request->file('images')) {
                $path = $request->file("images")->store("product",'public') ;        
                $updateProduct->images = $path;
        }

        $updateProduct->save();

        return back()->with("status", " succesfully change product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product, Request $request)
    {
        $id = $request->input("id");

        $deleteproduct = $product->find($id);

        Storage::delete($deleteproduct->images);

        $deleteproduct->delete();

        
        return redirect()->route('dashboard.product')->with("status","success delete Product"); 
    }
}
