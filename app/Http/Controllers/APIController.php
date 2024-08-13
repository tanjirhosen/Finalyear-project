<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $products;

    public function getAllProduct()
    {
        // $_GET['text']
        if($_GET['text'])
        {
            $this->products = Product::where('name', 'LIKE', "%{$_GET['text']}%")->orderBy('id', 'desc')->get(['id', 'name', 'selling_price', 'image']);
            foreach ($this->products as $product)
            {
                $product->image = asset($product->image);
            }
            return response()->json($this->products);
        }
        return response()->json([]);
        // $this->products = Product::orderBy('id', 'desc')->get(['id', 'name', 'selling_price', 'image']);
        // foreach ($this->products as $product)
        //     {
        //         $product->image = asset($product->image);
        //     }
        //     return response()->json($this->products);
    }
}
