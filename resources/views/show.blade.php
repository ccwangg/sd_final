@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="https://via.placeholder.com/600x400?text=商品詳情" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
        <h2 class="text-warning">復古相機 Canon AE-1</h2>
        <p class="text-muted">狀況：良好</p>
        <h4>價格：NT$1200</h4>
        <button class="btn btn-warning">🛒 加入購物車</button>
        <hr>
        <h5>商品描述</h5>
        <p>經典底片相機，功能正常，適合收藏。</p>
    </div>
</div>

{{-- 問答區 --}}
<div class="card mt-5">
    <div class="card-header bg-warning text-white">商品問答</div>
    <div class="card-body">
        <form>
            <textarea class="form-control" placeholder="有問題想問賣家嗎？"></textarea>
            <button class="btn btn-outline-warning mt-2">送出</button>
        </form>
        <hr>
        <div>
            <strong>買家A：</strong> 有含原廠鏡頭嗎？<br>
            <strong>賣家：</strong> 有附一顆 50mm 鏡頭喔！
        </div>
    </div>
</div>
@endsection
