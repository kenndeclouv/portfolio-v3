<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecretDashboardAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('dashboard_authenticated')) {
             if ($request->is('dashboard/login')) {
                 return $next($request);
             }
            return redirect()->route('dashboard.login');
        }

        if ($request->is('dashboard/login')) {
            return redirect()->route('dashboard.index');
        }

        return $next($request);
    }
}
