@extends('layouts.app')

@section('content')
<h2>新增商品</h2>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>名稱</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>價格</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>圖片連結</label>
        <input type="url" name="image" class="form-control">
    </div>
    <div class="mb-3">
        <label>描述</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button class="btn btn-warning">送出</button>
</form>
@endsection
