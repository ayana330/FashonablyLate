<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ完了 | FashonablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">FashonablyLate</a>
    </div>
  </header>

  <main class="thanks__content">
    <div class="thanks__message-box">
      <h2 class="thanks__heading">送信が完了しました</h2>
      <p class="thanks__message">
        お問い合わせいただきありがとうございました
      </p>
      <!-- HOMEボタン -->
      <div class="thanks__button">
        <a href="{{ route('contact.input') }}" class="thanks__link">HOME</a>
      </div>
    </div>
  </main>
</body>
</html>
