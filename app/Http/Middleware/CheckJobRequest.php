<?php

namespace App\Http\Middleware;

use Closure;

class CheckJobRequest
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
        if($request->platenumber==''){
            return redirect('/');
        }
        return $next($request);
    }
}
