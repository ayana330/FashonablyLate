@extends('layout')

@section('content')
  <form action="{{ route('search') }}" method="GET" class="search-form">
    <div class="search-form__group">
      <label class="search-form__label" for="name">名前</label>
      <input class="search-form__input" type="text" id="name" name="name" placeholder="名前を入力">
    </div>

    <div class="search-form__group">
      <label class="search-form__label" for="email">メールアドレス</label>
      <input class="search-form__input" type="email" id="email" name="email" placeholder="メールアドレスを入力">
    </div>

    <div class="search-form__group">
      <label class="search-form__label" for="gender">性別</label>
      <select class="search-form__input" id="gender" name="gender">
        <option value="">選択してください</option>
        <option value="male">男性</option>
        <option value="female">女性</option>
        <option value="other">その他</option>
      </select>
    </div>

    <div class="search-form__group">
      <label class="search-form__label" for="inquiry">お問い合わせの種類</label>
      <select class="search-form__input" id="inquiry" name="inquiry">
        <option value="">選択してください</option>
        <option value="product">製品について</option>
        <option value="support">サポート</option>
        <option value="other">その他</option>
      </select>
    </div>

    <div class="search-form__group">
      <label class="search-form__label" for="date">日付</label>
      <input class="search-form__input" type="date" id="date" name="date">
    </div>

    <div class="search-form__group" style="align-self: flex-end;">
      <button type="submit" class="search-form__button">検索</button>
    </div>
  </form>
@endsection
