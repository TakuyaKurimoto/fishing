<?php

namespace App\Http\Middleware;

use Closure;

class Language
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
        if (session()->has('applocale') and array_key_exists(session()->get('applocale'), config()->get('languages'))) {
            app()->setLocale(session()->get('applocale'));
        } else {
            app()->setLocale(config()->get('app.fallback_locale'));
        }
        
        return $next($request);
    }
}
