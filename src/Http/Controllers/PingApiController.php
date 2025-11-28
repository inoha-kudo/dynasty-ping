<?php

declare(strict_types=1);

namespace Dynasty\Ping\Http\Controllers;

use Dynasty\Ping\UseCases\PingUseCase;
use Illuminate\Http\Response;

final readonly class PingApiController
{
    public function __invoke(PingUseCase $interactor): Response
    {
        return response($interactor->handle())
            ->header('Content-Type', 'text/plain');
    }
}
