<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfScrape
{
    private $userIp;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
        $this->userIp = $request->ip();
        dd($this->userIp);
        return $next($request);
    }
}
