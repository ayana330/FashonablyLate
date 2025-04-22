<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // fillable プロパティを指定することで、マスアサインメントを許可するフィールドを設定
    protected $fillable = [
        'name',
        'email',
        'gender',
        'contact_type',
        'message',
    ];

    // テーブル名がデフォルトのテーブル名（contacts）と異なる場合は指定
    // protected $table = 'custom_table_name';
}
