@extends('layouts.app')

@section('content')
    <h1>Confirm</h1>


   <form action="/send" method="POST">
        @csrf
  
  <form class="form">
  <div class="confirm-table">
    <table class="confirm-table__inner">
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お名前</th>
        <td class="confirm-table__text">
          <input type="text" name="name" value="山田 太郎" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">性別</th>
        <td class="confirm-table__text">
          <input type="text" name="gender" value="男性" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">メールアドレス</th>
        <td class="confirm-table__text">
          <input type="email" name="email" value="test@example.com" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">電話番号</th>
        <td class="confirm-table__text">
          <input type="tel" name="tel" value="08012345678" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">住所</th>
        <td class="confirm-table__text">
          <input type="text" name="住所" value="東京都渋谷区千駄ヶ谷1-2-3" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">建物名</th>
        <td class="confirm-table__text">
          <input type="text" name="建物名" value="千駄ヶ谷マンション101" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お問い合わせの種類</th>
        <td class="confirm-table__text">
          <input type="text" name="お問い合わせの種類" value="商品の交換について" />
        </td>
      </tr>
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お問い合わせ内容</th>
        <td class="confirm-table__text">
          <input type="text" name="お問い合わせ内容" value="届いた商品が注文した商品ではありませんでした。
          商品の取り替えをお願いします。" />
    </table>
  </div>
  <div class="form__button">
    <button class="form__button-submit" type="submit">送信</button>

    <button class="form__button-submit" type="submit">修正</button>

        </div>
  </form>

@endsection
