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
}
