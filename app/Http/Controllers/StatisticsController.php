<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatisticsRequest;
use App\Http\Requests\UpdateStatisticsRequest;
use App\Models\StatisticDetail;
use App\Models\Statistics;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('statistics', [
            'daily' => StatisticDetail::whereType('daily')->get(),
            'month' => StatisticDetail::whereType('month')->get(),
            'statistics' => Statistics::orderBy('id', 'desc')->limit(500)->get(),
            'statistics_count' => Statistics::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistics $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticsRequest $request, Statistics $statistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
