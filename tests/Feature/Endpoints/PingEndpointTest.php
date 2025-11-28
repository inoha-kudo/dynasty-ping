<?php

declare(strict_types=1);

namespace Dynasty\Ping\Tests\Feature\Endpoints;

use Tests\TestCase;

final class PingEndpointTest extends TestCase
{
    public function test_ping(): void
    {
        $this->get(route('ping'))
            ->assertOk()
            ->assertSeeText('pong');
    }
}
