<?php

namespace App\Guestbook\Response\Handler;

abstract class AbstractResponse implements ResponseInterface
{
    protected $httpCode;

    /**
     * Return a default status code
     *
     * @return int
     */
    abstract protected function getDefaultCode(): int;

    /**
     * {@inheritdoc}
     */
    final public function getCode(): int
    {
        return $this->httpCode ?: $this->getDefaultCode();
    }

    /**
     * {@inheritdoc}
     */
    final public function setCode(int $httpCode): ResponseInterface
    {
        $this->httpCode = $httpCode;

        return $this;
    }
}
