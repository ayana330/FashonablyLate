<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // fillable プロパティを指定することで、マスアサインメントを許可するフィールドを設定
    protected $fillable = [
        'category_id', 'first_name',
        'last_name', 'gender',
        'email', 'tel',
        'address', 'building',
        'detail',
    ];

    public static $rules = [];
    // テーブル名がデフォルトのテーブル名（contacts）と異なる場合は指定
    // protected $table = 'custom_table_name';
}
