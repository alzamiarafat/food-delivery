<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class DashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user->weight >= 49.99 && $user->status == true && in_array('dashboard',explode(',', $user->domains)))
        {
            return $next($request);
        }
        return redirect('/')->with('message_warning','Sorry, you are not permitted to enter here. Please contact to your system admin.');
    }
}
