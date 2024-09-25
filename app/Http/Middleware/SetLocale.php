<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $locale = Session::get('locale') ?? 'en';
        Session::put('locale', $locale);
        // dd(session('locale'));
        App::setLocale($locale);
        // if (session()->has('locale')) {
        //     App::setLocale(session('locale'));
        // } else {
        //     App::setLocale(config('app.locale'));
        // }
        return $next($request);
    }
}
