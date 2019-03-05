<?php

namespace App\Http\Middleware;

use Closure;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断用户是否登陆
        if(!$request->cookie('a_id')){
            return redirect('login');
        }

        //执行下一步请求
        return $next($request);
    }
}
