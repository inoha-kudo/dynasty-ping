<?php

declare(strict_types=1);

test('ping', function () {
    $this->get(route('ping'))
        ->assertOk()
        ->assertSeeText('pong');
});
