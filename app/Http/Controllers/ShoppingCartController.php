<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShoppingCartController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::find($id);
        cart()->add($product->id, $product->name, 1, $product->price);
        return cart()->count();
    }
}
