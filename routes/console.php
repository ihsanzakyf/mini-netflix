<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Productions
// Schedule::command('check:memberships')
//     ->daily()
//     ->at('00:00')
//     ->timezone('Asia/Jakarta')
//     ->withoutOverlapping()
//     ->onOneServer()
//     ->evenInMaintenanceMode();

// Local
Schedule::command('app:check-memberships')->everyMinute();
