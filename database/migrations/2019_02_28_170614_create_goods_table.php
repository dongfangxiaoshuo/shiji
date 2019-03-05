<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id')->default(0)->comment('商户外键');
            $table->string('name',20)->default('')->comment('菜品名称');
            $table->string('photo',50)->default('')->comment('菜品照片');
            $table->integer('stars')->default(0)->comment('菜品星级');
            $table->integer('price')->default(0)->comment('菜品价格');
            $table->integer('number')->default(0)->comment('菜品销量');
            $table->string('introduce',255)->default('')->comment('菜品简介');
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
        Schema::dropIfExists('goods');
    }
}
