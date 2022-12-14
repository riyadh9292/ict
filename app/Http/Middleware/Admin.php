<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->type == 'admin') {
            return $next($request);
        } 
        elseif (auth()->user()->type == 'teacher') {
            return redirect()->route('teacher.dashboard');
        }
        elseif (auth()->user()->type == 'officer') {
            return redirect()->route('officer.dashboard');
        }
        else {
            return redirect()->route('welcome');
        }
    }
}
