@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h2 class="text-warning fw-bold">最新上架 🔥</h2>
</div>

@if($products->isEmpty())
    <p class="text-muted text-center">目前尚無商品。</p>
@else
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $product)
    <div class="col">
        <div class="card h-100">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text text-muted">NT${{ $product->price }}</p>
                <a href="/products/{{ $product->id }}" class="btn btn-outline-warning">查看詳情</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
