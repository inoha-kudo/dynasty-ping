<?php

declare(strict_types=1);

test('app:ping command', function () {
    $this->artisan('app:ping')
        ->expectsOutput('pong')
        ->assertOk();
});
