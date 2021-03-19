<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
<<<<<<< HEAD
                if($guard == 'admin'){
                    return redirect()->route('admin.home');
                }
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
