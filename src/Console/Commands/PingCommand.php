<?php

declare(strict_types=1);

namespace Dynasty\Ping\Console\Commands;

use Dynasty\Ping\UseCases\Ping\PingUseCase;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:ping')]
#[Description("Display 'pong'")]
final class PingCommand extends Command
{
    public function handle(PingUseCase $interactor): void
    {
        $output = $interactor->handle();

        $this->info($output->message);
    }
}
