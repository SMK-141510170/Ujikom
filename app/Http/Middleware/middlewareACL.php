<?php

namespace App\Http\Middleware;

use Closure;

class middlewareACL
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
    
    if(auth()->check() && $request->user()->permission=='pegawai')
    {
        return redirect('/');
    }
    return $next($request);
    }


}
