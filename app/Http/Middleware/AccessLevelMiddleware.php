<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AccessLevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $level): Response
    {
        $user = Auth::user();

        if (!$user || $user->access_level !== $level) {
           // abort(403, 'Acesso Restrito.');
           return redirect()->route('home')->withErrors(['sem_acesso' =>' Acesso Restrito']);
        }
        
        return $next($request);
    }
}
