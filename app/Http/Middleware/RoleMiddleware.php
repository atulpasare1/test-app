<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role)
    {
        //dd($role);
        // Check if the user is authenticated and has the correct role
        if (auth()->check() && auth()->user()->role !== $role) {
            // Redirect to home if the user doesn't have the required role
            return redirect('/');
        }

        // Allow the request to proceed
        return $next($request);
    }
}


