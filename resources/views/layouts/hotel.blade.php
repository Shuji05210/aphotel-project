<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- publicフォルダ内の cssフォルダ内の style.cssのファイル --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>APホテル</title>
    
</head>
<body>
    <header>
        <div class="head1">
        <h1>APホテル</h1>
        <nav>
            <ul class="main-nav">
                <li><a href="/guest">利用者一覧</a></li>
                <li><a href="/reserve">予約一覧</a></li>
                <li><a href="/reservedetail">予約詳細 一覧</a></li>
                <li><a href="/room">部屋一覧</a></li>
                <li><a href="/roomtype">部屋種別一覧</a></li>
                
            </ul>

            <ul class="main-nav">
                <li><a href="/guest/create">利用者登録</a></li>
                <li><a href="/reserve/create">予約ページ</a></li>
                <li><a href="/room/create">部屋登録</a></li>
                <li><a href="/roomtype/create">部屋種別登録</a></li>
            </ul>
            

        </nav>
        </div>
    </header>
    <body>
        @yield('body')
    </body>
</body>
</html>