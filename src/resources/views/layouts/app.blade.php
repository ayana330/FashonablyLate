<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- CSS -->
    @yield('css')

</head>
<body>

    <!-- ナビゲーションメニュー -->
    <nav>
        <ul>
            <li><a href="/">お問い合わせフォーム入力ページ</a></li>
            <li><a href="/confirm">お問い合わせフォーム確認ページ</a></li>
            <li><a href="{{ route('admin.dashboard') }}">管理画面</a></li>
            <li><a href="{{ route('register') }}">ユーザ登録ページ</a></li>
            <li><a href="{{ route('login') }}">ログインページ</a></li>
        </ul>
    </nav>

    <!-- コンテンツ -->
    @yield('content')

</body>
</html>
