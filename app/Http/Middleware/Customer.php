<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Customer
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
            if(auth()->user()->roles->name === 'customer'){
                return $next($request);
            }else{
                auth()->logout();
                session()->flash('message', 'First LoggedIn');
                session()->flash('messageType', 'danger');
                return redirect()->route('login');
            }
        }else{
            session()->flash('message', 'First LoggedIn');
            session()->flash('messageType', 'danger');
            return redirect()->route('login');
        }
    }
}
