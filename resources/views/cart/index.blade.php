@extends('layouts.app')

@section('content')
<h2 class="mb-4">🛒 我的購物車</h2>
<table class="table table-hover align-middle">
    <thead class="table-warning">
        <tr>
            <th>商品</th>
            <th>數量</th>
            <th>價格</th>
            <th>小計</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach(range(1, 3) as $i)
        <tr>
            <td>商品 {{ $i }}</td>
            <td><input type="number" value="1" class="form-control form-control-sm w-50"></td>
            <td>NT$200</td>
            <td>NT$200</td>
            <td><button class="btn btn-sm btn-danger">刪除</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="text-end">
    <h5>總金額：NT$600</h5>
    <button class="btn btn-warning">結帳</button>
</div>
@endsection
