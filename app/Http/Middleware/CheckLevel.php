<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLevel
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
        if (Auth::user()->level != 2){
            return redirect('admin')->with('error', 'Not welcome');
       
    }
 return $next($request);
    
    }
}
