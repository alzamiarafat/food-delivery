<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class ManagerMiddleware
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
        if ($user->weight == 49.99 && $user->status == true) {
            return $next($request);
        }
        else {
            return redirect('/')->with('message_warning','Sorry, you are not permitted to enter here. Please contact to your system admin.');
        }
    }
}
