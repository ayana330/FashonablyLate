@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
  <h1>Admin</h1>

<form action="{{ route('contacts.search') }}" method="GET" class="search-form">
    @csrf
    <div class="search-form__group">
        <label for="name" class="search-form__label">名前:</label>
        <input type="text" id="name" name="name" value="{{ request('name') }}" class="search-form__input" placeholder="名前を入力">
    </div>

    <div class="search-form__group">
        <label for="email" class="search-form__label">メールアドレス:</label>
        <input type="email" id="email" name="email" value="{{ request('email') }}" class="search-form__input" placeholder="メールアドレスを入力">
    </div>

    <div class="search-form__group">
        <label for="gender" class="search-form__label">性別:</label>
        <select id="gender" name="gender" class="search-form__input">
            <option value="">選択してください</option>
            <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
            <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
        </select>
    </div>

    <div class="search-form__group">
        <label for="contact_type" class="search-form__label">お問い合わせの種類:</label>
        <select id="contact_type" name="contact_type" class="search-form__input">
            <option value="">選択してください</option>
            <option value="general" {{ request('contact_type') == 'general' ? 'selected' : '' }}>一般</option>
            <option value="support" {{ request('contact_type') == 'support' ? 'selected' : '' }}>サポート</option>
        </select>
    </div>

    <div class="search-form__group">
        <label for="date" class="search-form__label">日付:</label>
        <input type="date" id="date" name="date" value="{{ request('date') }}" class="search-form__input">
    </div>

    <div class="search-form__group">
        <button type="submit" class="search-form__button">検索</button>
        <button type="submit" class="search-form__button">リセット</button>
        <button type="submit" class="search-form__button">エクスポート</button>   
    </div>

    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        <tr>
            <td>山田 太郎</td>
            <td>男性</td>
            <td>test@example.com</td>
            <td>商品の交換について</td>
            <td>詳細</td>
        </tr>
    </table>
</form>
@endsection
