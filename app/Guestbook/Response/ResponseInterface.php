<?php

namespace App\Guestbook\Response\Handler;

use Illuminate\Http\JsonResponse;

interface ResponseInterface
{
    /**
     * Send the HTTP response
     *
     * @param array $payload
     * @return JsonResponse
     */
    public function send(array $payload): JsonResponse;

    /**
     * Get the HTTP status code
     *
     * @return int
     */
    public function getCode(): int;

    /**
     * Set the HTTP status code
     *
     * @param int $httpCode
     * @return self
     */
    public function setCode(int $httpCode): ResponseInterface;
}
