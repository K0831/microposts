<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMicropostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microposts', function (Blueprint $table) {
            $table->increments('id');
            // unsignedは負の数を許可しない、indexは検索速度を高められる
            $table->integer('user_id')->unsigned()->index();
            $table->string('content');
            $table->timestamps();
            
            // 外部キー制約(外部キーを設定するカラム名)、(制約先のID名)、(外部キー制約先のテーブル名);
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microposts');
    }
}
