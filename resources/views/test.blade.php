<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCU Thrift Store</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div id="welcome-overlay" class="d-flex justify-content-center align-items-center">
            @php
                $greeting = "Welcome to NCU Thrift Store";
                $subtitle = "Nice to meet you.";
            @endphp
        <div class="welcome-content text-center text-white"> {{-- Bootstrap 文字置中和顏色 --}}
            <h1 id="welcome-title" class="display-3 mb-3">{{ $greeting }}</h1> {{-- Bootstrap 字體大小和間距 --}}
            <p id="welcome-subtitle" class="lead mb-4">{{ $subtitle }}</p> {{-- Bootstrap 字體樣式和間距 --}}
            <button id="enter-button" class="btn btn-light btn-lg rounded-pill px-4">進入網站</button>
    </div>


    <main id="main-content" style="display: none;">
        <h2>網站主要內容區域</h2>
        <p>這裡是您網站的其他精彩內容...</p>
        <p>由 Laravel 提供服務！現在時間是：{{ now() }}</p> {{-- Blade 可以直接呼叫一些輔助函式 --}}
    </main>

    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>