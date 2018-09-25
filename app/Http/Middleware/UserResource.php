<?php

namespace App\Http\Middleware;

use Closure;

class UserResource
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
        if (auth()->guest() || auth()->user()->id != $request->user->id) {
            return abort(403, 'This action is unauthorized');
        }

        return $next($request);
    }
}
