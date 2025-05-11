<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>簡易購物網站</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">購物網站</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="/" class="nav-link">首頁</a></li>
                <li class="nav-item"><a href="/products" class="nav-link">商品</a></li>
                <li class="nav-item"><a href="/cart" class="nav-link">購物車</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/login" class="nav-link">登入</a></li>
                <li class="nav-item"><a href="/register" class="nav-link">註冊</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
