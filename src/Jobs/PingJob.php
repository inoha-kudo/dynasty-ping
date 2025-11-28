<?php

declare(strict_types=1);

namespace Dynasty\Ping\Jobs;

use Dynasty\Ping\UseCases\Ping\PingUseCase;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

final class PingJob implements ShouldQueue
{
    use Queueable;

    public function handle(PingUseCase $interactor): void
    {
        $output = $interactor->handle();

        Log::info($output->message);
    }
}
