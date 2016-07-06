<?php

namespace App\Http\Middleware;

use Closure;

class QloginMiddleware
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
        if(session('id')){
        return $next($request);
    }else{
        return redirect('/login')->with('error','您还没有登录请去登录');
    }
 }

}
