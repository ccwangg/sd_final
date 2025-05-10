@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Super Admin 控制台</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-4 border rounded bg-white shadow">
            <h2 class="text-lg font-semibold">使用者管理</h2>
            <p>查看所有使用者，調整權限。</p>
        </div>

        <div class="p-4 border rounded bg-white shadow">
            <h2 class="text-lg font-semibold">文章與公告</h2>
            <p>管理整個平台的公告與貼文。</p>
        </div>

        <div class="p-4 border rounded bg-white shadow">
            <h2 class="text-lg font-semibold">系統設定</h2>
            <p>自訂平台設定（未來可擴充）。</p>
        </div>
    </div>
</div>
@endsection
