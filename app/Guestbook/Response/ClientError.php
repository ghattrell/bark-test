<?php

namespace App\Guestbook\Response\Handler;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;

class ClientError extends AbstractResponse
{
    const CODE = 400;

    /**
     * {@inheritdoc}
     */
    public function send(array $payload = []): JsonResponse
    {
        return Response::json([
            'success' => false,
            'payload' => [
                'errors' => $payload,
            ]
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
