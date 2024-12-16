<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
         $locale='';
        if($request->segment(1)=='arabic'){
            $locale='ar';
        }else if($request->segment(1)=='english'){
            $locale='en';
        }
        // if (!in_array($locale, ['en', 'ar'])) {
        //     $locale = 'ar';
        // }

        app()->setLocale($locale);
        return $next($request);
    }
}

