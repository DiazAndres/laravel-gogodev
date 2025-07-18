<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Example
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // *Metodo handle se va a ejecutar antes de que se ejecute el controlador
    public function handle(Request $request, Closure $next): Response
    {
        return redirect()->route('no-access');
        return $next($request);
    }
}
