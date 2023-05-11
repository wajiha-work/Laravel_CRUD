<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tb_products';
    protected $fillable = ['productName', 'price', 'stock', 'longDescription', 'expiry_date'];


    protected static function saveProduct($data)
    {
        $product = Product::create([
            "productName" => $data['productName'],
            "price" => $data['price'],
            "stock" => $data['stock'],
            "longDescription" => $data['longDescription'],
            "expiry_date" => $data['expiry_date'],
        ]);

        return $product->id;
    }


    protected static function getAllProducts()
    {
        return Product::all();
    }

    protected static function getProductById($id)
    {
        return Product::find($id);
    }

    protected static function updateProduct($data, $id)
    {
        $product = Product::find($id);

        $product->productName = $data["productName"];
        $product->price = $data["price"];
        $product->stock = $data["stock"];
        $product->longDescription = $data["longDescription"];
        $product->expiry_date = $data["expiry_date"];

        $product->save();

        return true;
    }

    protected static function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
