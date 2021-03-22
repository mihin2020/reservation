<?php/*

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *//*
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
            if (Auth::user()->isAdmin() ){
                return redirect(route('/pages/dashboard'));
            }
            else if (Auth::user()->isApprenant() ){
                return $next ($request);
            }
        }
    }
}
