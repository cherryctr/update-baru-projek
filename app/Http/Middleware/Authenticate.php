<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
<<<<<<< HEAD
<<<<<<< HEAD
            if($request->is('admin/*')){
               return route('admin.login');
            }
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
=======
>>>>>>> 15dc74ce489af3c27bd82a483ae3c00b8e79ccbb
            return route('login');
        }
    }
}
