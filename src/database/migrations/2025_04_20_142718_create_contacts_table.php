<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // 外部キー
            $table->string('first_name', 255); // not null
            $table->string('last_name', 255);  // not null
            $table->tinyInteger('gender');     // 1:男性 2:女性 3:その他
            $table->string('email', 255);      // not null
            $table->string('tel', 255);        // not null
            $table->string('address', 255);    // not null
            $table->string('building', 255)->nullable(); // nullable
            $table->text('detail');            // お問い合わせ内容（not null）
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
