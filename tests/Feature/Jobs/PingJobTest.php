<?php

declare(strict_types=1);

use Dynasty\Ping\Jobs\PingJob;
use Illuminate\Support\Facades\Log;

test('PingJob handle', function () {
    Log::spy();

    app()->call([new PingJob, 'handle']);

    Log::shouldHaveReceived('info')
        ->with('pong')
        ->once();
});
