@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
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
  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">Todo</th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test">
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
      <tr class="todo-table__row">
        <td class="todo-table__item">
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
