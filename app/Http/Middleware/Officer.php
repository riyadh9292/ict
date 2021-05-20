<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Officer
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
        if (auth()->user()->type == 'officer') {
            return $next($request);
        } 
        elseif (auth()->user()->type == 'teacher') {
            return redirect()->route('teacher.dashboard');
        }
        elseif (auth()->user()->type == 'admin') {
            return redirect()->route('officer.dashboard');
        }
        else {
            return redirect()->route('welcome');
        }
    }
}
