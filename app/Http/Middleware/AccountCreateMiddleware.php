<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccountCreateMiddleware
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
        $user = Auth()->user();
        if($user->speciality != null && $user->about != null && $user->login != null && $user->lastname){
            return $next($request);
        }else{
            return to_route('account.settings')->withError('No data');
        }
    }
}
