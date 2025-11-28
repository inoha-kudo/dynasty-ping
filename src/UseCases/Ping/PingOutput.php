<?php

declare(strict_types=1);

namespace Dynasty\Ping\UseCases\Ping;

final readonly class PingOutput
{
    public function __construct(
        public string $message,
    ) {}
}
