<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   public function index()
{
    $cart = Session::get('cart', []);
    return view('cart.index', compact('cart'));
}

public function add($id)
{
    $product = Product::findOrFail($id);
    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += 1;
    } else {
        $cart[$id] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image
        ];
    }

    Session::put('cart', $cart);

    return redirect()->route('cart.index')->with('success', '已加入購物車！');
}

public function remove($id)
{
    $cart = Session::get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
    }
    Session::put('cart', $cart);

    return redirect()->route('cart.index')->with('success', '商品已移除');
}
}
