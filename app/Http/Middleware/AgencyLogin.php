<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgencyLogin
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
            if(auth()->user()->roles->name === 'agency'){
                return redirect()->route('agency.dashboard');
            }elseif(auth()->user()->roles->name === 'agent'){
                return redirect()->route('agent.dashboard');
            }elseif(auth()->user()->roles->name === 'customer'){
                return redirect()->route('customer.dashboard');
            }else{
                return $next($request);
            }
        }else{
            return $next($request);
        }
    }
}
