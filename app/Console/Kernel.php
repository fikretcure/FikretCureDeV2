<?php

namespace App\Console;

use App\Models\StatisticDetail;
use App\Models\Statistics;
use Egulias\EmailValidator\Parser\LocalPart;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            Log::error(rand());
            Statistics::where('ip', '95.70.206.227')->delete();
        })->everyMinute();

        $schedule->call(function () {
            $count = Statistics::whereDate('created_at', now()->yesterday())->count();
            StatisticDetail::create([
                'type' => 'daily',
                'history' => now()->yesterday(),
                'count' => $count
            ]);
        })->daily();

        $schedule->call(function () {
            $count = Statistics::whereYear('created_at', Carbon::now()->format('Y'))->whereMonth('created_at', Carbon::now()->format('m'))->count();
            StatisticDetail::create([
                'type' => 'month',
                'history' => now(),
                'count' => $count
            ]);
        })->lastDayOfMonth();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
