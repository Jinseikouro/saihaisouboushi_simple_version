<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    private const GUARD_USER='users';
    private const GUARD_DRIVER='drivers';
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        if(Auth::guard(self::GUARD_USER)->check() && $request->routeIs('user.*')){return redirect(RouteServiceProvider::HOME);}
        if(Auth::guard(self::GUARD_DRIVER)->check() && $request->routeIs('driver.*')){return redirect(RouteServiceProvider::DRIVER_HOME);}


        /*
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }
        */
        return $next($request);
    }
}
