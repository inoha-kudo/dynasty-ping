<?php

declare(strict_types=1);

namespace Dynasty\Ping\Http\Controllers;

use Dynasty\Ping\UseCases\Ping\PingUseCase;
use Illuminate\Http\Response;

final class PingApiController
{
    public function __invoke(PingUseCase $interactor): Response
    {
        $output = $interactor->handle();

        return response($output->message)
            ->header('Content-Type', 'text/plain');
    }
}
