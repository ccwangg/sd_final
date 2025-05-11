@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1>🛍️ 歡迎來到我們的購物網站！</h1>
        <p class="lead">探索最新商品，一鍵加入購物車。</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x200?text=商品{{ $i }}" class="card-img-top" alt="商品{{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title">商品名稱 {{ $i }}</h5>
                        <p class="card-text">NT$ {{ rand(199, 599) }}</p>
                        <a href="#" class="btn btn-primary">加入購物車</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
