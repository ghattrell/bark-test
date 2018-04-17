<?php

namespace App\Guestbook\Response\Handler;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class ServerError extends AbstractResponse
{
    const CODE = 500;

    /**
     * {@inheritdoc}
     */
    public function send(array $payload): JsonResponse
    {
        return Response::json([
            'success' => false,
            'payload' => $payload,
        ], $this->getCode());
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultCode(): int
    {
        return self::CODE;
    }
}
