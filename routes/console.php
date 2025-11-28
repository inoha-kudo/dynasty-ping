<?php

declare(strict_types=1);

use Dynasty\Ping\Console\Commands\PingCommand;
use Dynasty\Ping\Jobs\PingJob;
use Illuminate\Console\Application as Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::starting(function (Artisan $artisan) {
    $artisan->resolve(PingCommand::class);
});

Schedule::job(PingJob::class)->daily();
