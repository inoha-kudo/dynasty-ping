<?php

declare(strict_types=1);

test('dynasty.ping endpoint', function () {
    $this->get(route('dynasty.ping'))
        ->assertOk()
        ->assertContent('pong');
});
