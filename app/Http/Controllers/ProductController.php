<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'image' => 'nullable|url'
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('products.index')->with('success', '商品已新增！');
    }

    public function edit(Product $product)
    {
        $this->authorizeProduct($product);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorizeProduct($product);
        
        $product->update($request->only('name', 'price', 'image', 'description'));

        return redirect()->route('products.index')->with('success', '商品已更新！');
    }

    public function destroy(Product $product)
    {
        $this->authorizeProduct($product);
        $product->delete();

        return redirect()->route('products.index')->with('success', '商品已刪除');
    }

    private function authorizeProduct(Product $product)
    {
        $user = Auth::user();
        if ($product->user_id !== $user->id && !in_array($user->role, ['admin', 'super'])) {
            abort(403, '你無權限操作這個商品');
        }
    }
}
