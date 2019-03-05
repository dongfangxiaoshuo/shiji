<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('商户名称');
            $table->string('phone')->default('')->comment('商户电话');
            $table->string('address',50)->default('远在天边，近在眼前')->comment('商户地址');
            $table->string('photo',255)->default('')->comment('商户照片');
            $table->string('introduce',255)->default('这个商家很懒~~')->comment('商户简介');
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
        Schema::dropIfExists('shops');
    }
}
