<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index($id, $name, $sex, $age=10)
    {
        //查询所有的帖子信息！
        $res = DB::table('post')->take(10)->get();
        dump($res);

        //获取系统时间
        dump(date("Y-m-d H:i:s"));

        //读取配置信息
        dump(config("app.timezone"));
        dump(config("mail.username"));

        //动态设置配置
        config(['app.timezone'=>'UTC']);
        dump(config("app.timezone"));

        //获取 .env 环境配置的内容
        dump(env('APP_KEY'));

        //打印获取到的值
        dump($id, $name, $sex, $age);

        //解析名字为test的模板
        return view('test');
    }
}
