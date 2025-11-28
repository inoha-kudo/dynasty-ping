<?php

declare(strict_types=1);

namespace Dynasty\Ping\UseCases\Ping;

use Miraiportal\Ping\Services\PingService;

final readonly class PingInteractor implements PingUseCase
{
    public function __construct(
        private PingService $pingService,
    ) {}

    public function handle(): PingOutput
    {
        return new PingOutput($this->pingService->ping());
    }
}
