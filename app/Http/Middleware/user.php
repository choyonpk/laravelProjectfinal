<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class user
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
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        if(Auth::user()->type == 'user')
        {
            return $next($request);
        }
        if (Auth::user()->type == 'agent') 
        {
            return redirect()->route('agent.home.index');
        }

        }
    }

