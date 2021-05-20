<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Teacher
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
        if (auth()->user()->type == 'teacher') {
            return $next($request);
        } 
        elseif (auth()->user()->type == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }
        elseif (auth()->user()->type == 'officer')
        {
            return redirect()->route('officer.dashboard');
        }
        else {
            return redirect()->route('welcome');
        }
    }
}
