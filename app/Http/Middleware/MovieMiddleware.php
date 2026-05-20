<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieMiddleware
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

        $cantidad=Movie::count();

        if ($cantidad>=5){
            $publicadas=Movie::where('is_published',1)->count();

            if($publicadas>=2){
                return $next($request); 
            }
            return abort(403);
        }
        return abort(403);
        
    }
}
