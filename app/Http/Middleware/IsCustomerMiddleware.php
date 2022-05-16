<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsCustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::attempt([
            'email' => $request['email'],
            'password' => $request['password'],
        ])){
            return $next($request);
        } else {
            return response()->json([
                'message' => 'unauthorized',
                'success' => 'false',
                'code' => '401',
                'email' => $request['email'],
                'password' => $request['password'],
            ]);
        }
    }
}
