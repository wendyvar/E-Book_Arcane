<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $userId = Session::get('user_id');

        $existingCart = Cart::where('name', $request->input('product_name'))
            ->where('user_id', $userId)
            ->first();

        if ($existingCart) {
            Session::flash('message', 'Already added to cart!');
        } else {
            Cart::create([
                'user_id' => $userId,
                'name' => $request->input('product_name'),
                'price' => $request->input('product_price'),
                'quantity' => $request->input('product_quantity'),
                'image' => $request->input('product_image')
            ]);
            Session::flash('message', 'Product added to cart!');
        }

        return back();
    }
}

