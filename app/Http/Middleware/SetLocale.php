<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Log::info('SetLocale middleware - Starting');
        \Log::info('SetLocale middleware - Current locale: ' . app()->getLocale());
        \Log::info('SetLocale middleware - Session ID: ' . session()->getId());
        \Log::info('SetLocale middleware - Session has locale: ' . (session()->has('locale') ? 'yes' : 'no'));
        
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
            \Log::info('SetLocale middleware - Setting locale from session: ' . Session::get('locale'));
        } else {
            // Set default locale if none is set
            $defaultLocale = config('app.locale');
            \Log::info('SetLocale middleware - Using default locale: ' . $defaultLocale);
            App::setLocale($defaultLocale);
        }
        
        \Log::info('SetLocale middleware - Final locale: ' . app()->getLocale());
        \Log::info('SetLocale middleware - Session locale after setting: ' . session('locale', 'not set'));
        
        return $next($request);
    }
}