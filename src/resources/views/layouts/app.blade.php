<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashonablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          FashonablyLate
        </a>
        <nav>
          <ul class="header-nav">
            <!-- 会員登録ボタンの追加 -->
            @guest   
              <li class="header-nav__item">
                <a class="header-nav__link" href="{{ route('register') }}">register</a>
              </li>
            @endguest
            <!-- マイページとログアウトボタン -->
            @auth
              <li class="header-nav__item">
                <a class="header-nav__link" href="/mypage">マイページ</a>
              </li>
              <li class="header-nav__item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="header-nav__button">ログアウト</button>
                </form>
              </li>
            @endauth
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>