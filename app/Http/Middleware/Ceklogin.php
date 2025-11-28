<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ceklogin
{
    public function handle(Request $request, Closure $next): Response
    {

        if (request()->input ('token') != "login") {
        return redirect('/');
    }
        return $next($request);
    }
}
