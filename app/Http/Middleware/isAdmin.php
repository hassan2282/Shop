<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->isAdmin == 1)
        {
            return $next($request);
        }elseif (auth()->user()->isVendor ==1){
            return $next($request);
        }else{
            Alert::error('خطا','شما اجازه دسترسی به این بخش را ندارید');
            return back();
        }
    }
}
