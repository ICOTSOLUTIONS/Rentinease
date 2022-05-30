<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(auth()->user()->roles->name === 'admin'){
                return redirect()->route('admin.dashboard');
            }elseif(auth()->user()->roles->name === 'superadmin'){
                return redirect()->route('admin.dashboard');
            }elseif(auth()->user()->roles->name === 'subadmin'){
                return redirect()->route('admin.dashboard');
            }else{
                return $next($request);
            }
        }else{
            return $next($request);
        }
    }
}
