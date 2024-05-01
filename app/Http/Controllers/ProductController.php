<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id') 
        ->select('products.*',  'categories.name as category')
        ->get();
    
    return view('productos.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->orderBy('name')->get();
        return view('productos.new', [  'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category;

        $product->save();

        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id') 
        ->select('products.*',  'categories.name as category')
        ->get();
    
        return view('productos.index', ['products' => $products]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Product::find($id);
        $categories = DB::table('categories')->orderBy('name')->get();
        return view('productos.edit', ['product' => $producto, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category;

        $product->save();

        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id') 
        ->select('products.*',  'categories.name as category')
        ->get();
    
        return view('productos.index', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Product::find($id);
        $producto->delete();

        $products = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id') 
        ->select('products.*',  'categories.name as category')
        ->get();
    
        return view('productos.index', ['products' => $products]);
    }
}
