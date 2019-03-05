<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0)->comment('用户外键');
            $table->string('name',32)->default('')->comment('菜谱名称');
            $table->integer('stars')->default(0)->comment('菜谱星级');
            $table->string('introduce',255)->default('')->comment('菜谱简介');
            $table->integer('number')->default(0)->comment('菜谱阅读量');
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
        Schema::dropIfExists('menus');
    }
}
