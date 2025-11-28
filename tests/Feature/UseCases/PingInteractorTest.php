<?php

declare(strict_types=1);

use Dynasty\Ping\UseCases\Ping\PingInteractor;

test('PingInteractor handle', function () {
    $output = app(PingInteractor::class)->handle();

    expect($output->message)->toBe('pong');
});
