<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetArabicLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('lang'); // Get {lang} from route

        if (!in_array($locale, ['ar', 'en'])) {
            $locale = 'ar'; // default to Arabic if unsupported
        }

        App::setLocale($locale);

        return $next($request);
    }
}
