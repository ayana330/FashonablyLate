<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
  <header class="header">
    <div class="hedder__inner">
        <a class="header__logo" href="/">
        FashonablyLate</a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
        <div class="contact-form__heading">
        <h2>Register</h2>
        </div>
    </div>
    <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" placeholder="例：山田太郎">
          </div>
        <div class="form__error">
            <!--バリデーション機能を実装したら記述します。 -->
        </div>
        </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例：test@example.com" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
    </div>
    <div class="form__group-content">
      <div class="form__input--text">
        <input type="password" name="password" placeholder="例：coachtech1106" />
    </div>
    <div class="form__error">
      <!--バリデーション機能を実装したら記述します。-->
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
      </form>
    </main>
</body>
</html>