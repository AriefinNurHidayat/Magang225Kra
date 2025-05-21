<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;

class UserOrAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ✅ Gunakan facade Auth secara eksplisit
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin' || $user->role === 'user') {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}
