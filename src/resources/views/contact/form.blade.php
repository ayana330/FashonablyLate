@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/form.css') }}" />
@endsection
@section('content')
    <h1>Contact</h1>


    <form action="/confirm" method="POST">
       @csrf
       <table>
        <div class="flex">
        <tr>
          <th><span class="form__label--item">お名前</span></th>
          <td>
            <input type="text" class="wname" name="last_name" value="{{ old('last_name') }}" placeholder="例：山田" >
            <input type="text" class="wname" name="first_name" value="{{ old('first_name') }}" placeholder="例：太郎" >
            <div class="form__error">
              @error('last_name')
                <span>{{ $message }}</span>
              @enderror
              @error('first_name')
                <span>{{ $message }}</span>
              @enderror
            </div>

          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">性別</span></th>
          <td>
          <div class="form__group-content">
            <label class="form__radio">
              <input type="radio" name="gender" value="1" {{ old('gender', '1') == '1' ? 'checked' : '' }}> 男性
            </label>
            <label class="form__radio">
              <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}> 女性
            </label>
            <label class="form__radio">
              <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}> その他
            </label>

          </div>
          <div class="form__error">
            @error('gender')
              <span>{{ $message }}</span>
            @enderror
          </div>
          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">メールアドレス</span></th>
          <td>
          <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="例：test@example.com">
            </div>
          </div>
          <div class="form__error">
             @error('email')
              <span>{{ $message }}</span>
            @enderror
          </div>

          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">電話番号</span></th>
          <td>
              <div class="form__input--text tel-input">
              <input type="text" class="tel" name="tel1" value="{{ old('tel1') }}" placeholder="080" maxlength="4">ー
              <input type="text" class="tel" name="tel2" value="{{ old('tel2') }}" placeholder="1234" maxlength="4">ー
              <input type="text" class="tel" name="tel3" value="{{ old('tel3') }}" placeholder="5678" maxlength="4">
              </div>
            <div class="form__error">
              @error('tel1')
                <span>{{ $message }}</span>
              @enderror
              @error('tel2')
                <span>{{ $message }}</span>
              @enderror
              @error('tel3')
                <span>{{ $message }}</span>
              @enderror
            </div>
          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">住所</span></th>
          <td>
              <div class="form__input--text">
                <input type="text" name="address" value="{{ old('address') }}" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
              </div>
              <div class="form__error">
              @error('address')
              <span>{{ $message }}</span>
              @enderror 
              </div>

          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">建物名</span></th>
          <td>
              <div class="form__input--text">
              <input type="text" name="building" value="{{ old('building') }}" placeholder="例：千駄ヶ谷マンション101">
              </div>

              <div class="form__error">
              @error('building')
              <span>{{ $message }}</span>
              @enderror
             </div>
            </td>
        </tr>
        <tr>
          <th><span class="form__label--item">お問い合わせの種類</span></th>
          <td>
          <div class="form__input--text">
              <select name="inquiry_type">
                  <option value="" disabled {{ old('inquiry_type') == '' ? 'selected' : '' }}>選択してください</option>
                  <option value="1" {{ old('inquiry_type') == '1' ? 'selected' : '' }}>質問</option>
                  <option value="2" {{ old('inquiry_type') == '2' ? 'selected' : '' }}>サポート</option>
                  <option value="3" {{ old('inquiry_type') == '3' ? 'selected' : '' }}>フィードバック</option>
                  <option value="4" {{ old('inquiry_type') == '4' ? 'selected' : '' }}>その他</option>
                </select>

            </div>
            <div class="form__error">
              @error('inquiry_type')
              <span>{{ $message }}</span>
              @enderror
            </div>

          </td>
        </tr>
        <tr>
          <th><span class="form__label--item">お問い合わせ内容</span></th>
          <td>
              <div class="form__input--text">
               <textarea name="inquiry_content" rows="5" placeholder="お問合せ内容をご記載ください">{{ old('inquiry_content') }}</textarea>
              </div>

              <div class="form__error">
               @error('inquiry_content')
                <span>{{ $message }}</span>
               @enderror
            </div>

          </td>
        </tr>
       </table>
          
          


          <!-- 確認画面ボタン -->
          <div class="form__group">
            <div class="form__group-content">
              <button type="submit">確認画面</button>
            </div>
          </div>
        </div>
    </form>
  </main>
@endsection