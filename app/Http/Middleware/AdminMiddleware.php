<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            $user = User::find(auth()->id());
            if (!$user->isAdmin() || $user->isSuperAdmin()) {
                abort(403, 'Unauthorized action.');
            } else {
                return $next($request);
            }
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
