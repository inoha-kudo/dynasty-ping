<?php

declare(strict_types=1);

namespace Dynasty\Ping\Tests\Feature\UseCases;

use Dynasty\Ping\UseCases\PingInteractor;
use Tests\TestCase;

final class PingInteractorTest extends TestCase
{
    private PingInteractor $interactor;

    #[\Override]
    protected function setUp(): void
    {
        parent::setUp();

        $this->interactor = app(PingInteractor::class);
    }

    public function test_handle(): void
    {
        $this->assertSame(
            'pong',
            $this->interactor->handle(),
        );
    }
}
