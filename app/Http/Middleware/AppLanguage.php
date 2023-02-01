<?php

namespace App\Http\Middleware;

use Closure;
use App;

class AppLanguage
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
        // Check header request and determine localizaton
        if($request->hasHeader('App-Language')){
            $locale = $request->header('App-Language');
        }
        elseif(config('custom.default_language') != null){
            $locale = config('custom.default_language');
        }
        else{
            $locale = 'en';
        }


        // set laravel localization
        App::setLocale($locale);

        // continue request
        return $next($request);
    }
}
