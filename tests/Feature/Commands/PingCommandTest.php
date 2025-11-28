<?php

declare(strict_types=1);

namespace Dynasty\Ping\Tests\Feature\Commands;

use Tests\TestCase;

final class PingCommandTest extends TestCase
{
    public function test_ping(): void
    {
        $this->artisan('app:ping')
            ->expectsOutput('pong')
            ->assertOk();
    }
}
