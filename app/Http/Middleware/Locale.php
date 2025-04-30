<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Locale
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('app_locale')) {
            App::setLocale(session('app_locale'));
        }
        return $next($request);
    }
} 