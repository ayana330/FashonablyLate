<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return[
        'last_name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'email' => 'required|email',
        'gender' => 'required|in:1,2,3',
        'tel1' => 'required|digits_between:1,5',
        'tel2' => 'required|digits_between:1,5',
        'tel3' => 'required|digits_between:1,5',
        'address' => 'required|string|max:255',
        'building' => 'nullable|string|max:255',
        'inquiry_type' => 'required|in:1,2,3,4',
        'inquiry_content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '苗字を入力してください',
            'last_name.string' => '苗字は文字列で入力してください',
            'last_name.max' => '苗字は255文字以内で入力してください',
            'first_name.required' => '名前を入力してください', 
            'first_name.string' => '名前は文字列で入力してください',
            'first_name.max' => '名前は255文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'gender.required' => '性別を入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.digits_between' => '1～5桁で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.digits_between' => '1～5桁で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.digits_between' => '1～5桁で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所は255文字以内で入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'inquiry_type.in' => 'お問い合わせの種類を1,2,3,4の中から選択してください',
            'inquiry_content.required' => 'お問い合わせ内容を入力してください',
            'inquiry_content.string' => 'お問合せ内容を文字列で入力してください',
        ];
    }
}
