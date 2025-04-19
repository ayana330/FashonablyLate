<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
         Confirm
      </a>
    </div>
  </header>
  @extends('layouts.app')

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>お問い合わせ内容 確認</h2>
  </div>

  <form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <table class="confirm-table">
      <tr>
        <th>お名前（姓）</th>
        <td>{{ $inputs['last_name'] }}</td>
      </tr>
      <tr>
        <th>お名前（名）</th>
        <td>{{ $inputs['first_name'] }}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{ $inputs['gender'] }}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ $inputs['email'] }}</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $inputs['address'] }}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{ $inputs['building'] }}</td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td>{{ $inputs['inquiry_type'] }}</td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td>{!! nl2br(e($inputs['inquiry_content'])) !!}</td>
      </tr>
    </table>

    {{-- hiddenフィールドで値を保持 --}}
    @foreach ($inputs as $name => $value)
      @if(is_array($value))
        @foreach($value as $v)
          <input type="hidden" name="{{ $name }}[]" value="{{ $v }}">
        @endforeach
      @else
        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
      @endif
    @endforeach

    <div class="form__buttons">
      <button type="submit" name="action" value="back">戻る</button>
      <button type="submit" name="action" value="submit">送信</button>
    </div>
  </form>
</div>
@endsection

