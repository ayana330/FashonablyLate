@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<header class="header">
  <div class="header__inner">
    <a class="header__logo" href="/">
      お名前 性別 メールアドレス お問い合わせ内容
    </a>
  </div>
</header>
<div class="admin__content">
  <form class="admin-form">
    <div class="admin-form__item">
      <input class="admin-form__item-input" type="text" name="お名前">
    </div>
  <form class="admin-form">
    <div class="admin-form__item">
      <input class="admin-form__item-input" type="text" name="性別">
    </div>
  <form class="admin-form">
    <div class="admin-form__item">
      <input class="admin-form__item-input" type="text" name="メールアドレス">
    </div>
  <form class="admin-form">
    <div class="admin-form__item">
      <input class="admin-form__item-input" type="text" name="お問い合わせの種類">
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">詳細</button>
    </div>
  </form>
  <div class="admin-table">
    <table class="admin-table__inner">
      <tr class="admin-table__row">
        <th class="admin-table__header"></th>
      </tr>
      <tr class="admin-table__row">
        <td class="admin-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="admin-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
      <tr class="admin-table__row">
        <td class="admin-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test2">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
@endsection
