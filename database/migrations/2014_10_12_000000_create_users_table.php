<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->default('')->comment('用户名');
            $table->string('email',32)->default('')->comment('用户邮箱');
            $table->string('phone')->default('')->comment('用户电话');
            $table->string('password')->default('')->comment('用户密码');
            $table->enum('role',['1','2','3'])->default('1')->comment('判断登陆角色：1为普通，2为商户（厨师）,3为骑手
           ');
            $table->enum('state',['1','2','3'])->default('1')->comment('判断登陆用户状态：1为正常，2为锁定');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
