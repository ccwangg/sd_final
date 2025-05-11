@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">二手商品列表</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ $product->image }}" class="card-img-top" alt="商品圖片">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-success fw-bold">${{ $product->price }}</p>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">查看詳情</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
