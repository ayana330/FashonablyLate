<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">ダッシュボード</a></li>
                <li><a href="{{ route('admin.contacts.index') }}">お問い合わせ一覧</a></li>
                <li><a href="{{ route('logout') }}">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 管理画面</p>
    </footer>
</body>
</html>
