@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
    <h1>Confirm</h1>

   <form action="/send" method="POST">
        @csrf
  
  <form class="form">
  <div class="confirm-table">
    <table class="confirm-table__inner">
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お名前</th>
        <td class="confirm-table__text">{{$inputs['last_name'].$inputs['first_name']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">性別</th>
        <td class="confirm-table__text">
         @if($inputs['gender']==1) 男性
         @elseif($inputs['gender']==2) 女性
         @else その他
         @endif
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">メールアドレス</th>
        <td class="confirm-table__text">
        {{$inputs['email']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">電話番号</th>
        <td class="confirm-table__text">
        {{$inputs['tel1'].$inputs['tel2'].$inputs['tel3']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">住所</th>
        <td class="confirm-table__text">
        {{$inputs['address']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">建物名</th>
        <td class="confirm-table__text">
        {{$inputs['building']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お問い合わせの種類</th>
        <td class="confirm-table__text">
        {{$inputs['inquiry_type']}}</td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お問い合わせ内容</th>
        <td class="confirm-table__text">
        {{$inputs['inquiry_content']}}</td>
      </tr>
    </table>
  </div>
  <div class="form__button">
  <button class="form__button-submit" name="send" type="submit">送信</button>
  <button class="form__button-submit" name="action" value="back" type="submit">修正</button>
  
  </div>
  </form>

@endsection
