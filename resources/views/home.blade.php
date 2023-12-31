<!DOCTYPE html>
<html lang=" {{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCUBA JAPAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./scuba-japan/resources/css/home.css">
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/posts/create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">新規投稿</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
                @endif
            @endauth
        </div>
    @endif

    <h1><a href="/index">ポイント検索</a></h1>

</div>
</body>
</html>