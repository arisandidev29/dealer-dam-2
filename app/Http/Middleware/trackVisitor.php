<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class trackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Visitor::where("ip_address",$request->ip())->get()->first()){
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);

        }
        return $next($request);
    }
}
