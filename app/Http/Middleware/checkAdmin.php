<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = $request->user();

        if (Auth::check()) {
            $user = Auth::user();
            // Kiểm tra vai trò người dùng
        } else {
            return redirect()->route('login');
        }

        
        if ($user && $user->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Access denied');    
    }
}
