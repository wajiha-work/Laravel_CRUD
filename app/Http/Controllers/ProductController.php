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
        //
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
            return view('products.create');
    }

    /**
     * Display the specified resource. [R single]
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. [U show form]
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. [U submit form]
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. [D]
     */
    public function destroy(string $id)
    {
        //
    }
}
