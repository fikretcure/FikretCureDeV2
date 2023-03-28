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
            $statistic = Statistics::latest('id')->where('ip', $request->ip())->first('created_at');
            if (!$statistic || now()->greaterThanOrEqualTo($statistic->created_at->addMinutes(2))) {
                $location = collect(Location::get($request->ip()));
                Statistics::create($location->toArray());
            }
        }
        return $next($request);
    }
}
