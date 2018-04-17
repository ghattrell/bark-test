<?php

namespace App\Guestbook\Response\Handler;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;

class Success extends AbstractResponse
{
    const CODE = 200;

    /**
     * {@inheritdoc}
     */
    public function send(array $payload = []): JsonResponse
    {
        return Response::json([
            'success' => true,
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
