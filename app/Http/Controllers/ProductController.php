<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource. [R list]
     */
    public function index()
    {
        $products = Product::getAllProducts();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource. [C form view]
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage. [C submit form]
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        // exit;

            Product::saveProduct($request->all());
            return redirect('/products')->with('success', 'Product has been added!');
    }

    /**
     * Display the specified resource. [R single]
     */
    public function show(string $id)
    {
        $product = Product::getProductById($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource. [U show form]
     */
    public function edit(string $id)
    {
        $product = Product::getProductById($id);
        return view('products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage. [U submit form]
     */
    public function update(Request $request, string $id)
    {
        Product::updateProduct($request->all(), $id);
        return redirect('/products')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage. [D]
     */
    public function destroy(string $id)
    {
        Product::deleteProduct($id);
        return redirect('/products')->with('success', 'Product has been deleted!');
    }
}
