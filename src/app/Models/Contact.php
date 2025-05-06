<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // fillable プロパティを指定することで、マスアサインメントを許可するフィールドを設定
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'tel',
        'address',
        'building',
        'detail',
        'category_id',
    ];

    // テーブル名がデフォルトのテーブル名（contacts）と異なる場合は指定
    // protected $table = 'custom_table_name';
}
