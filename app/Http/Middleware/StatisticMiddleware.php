<?php

namespace App\Http\Middleware;

use App\Models\Statistics;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class StatisticMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (env('APP_ENV') == "production") {
            $location = collect(Location::get($request->ip()));
            Statistics::create($location->toArray());
        }
        return $next($request);
    }
}
