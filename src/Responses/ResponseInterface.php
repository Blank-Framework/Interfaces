<?php

namespace BlankFramework\Interfaces\Responses;

interface ResponseInterface {
    /**
     * Returns the HTTP Response code for this particular response.
     * @return int
     */
    public function getHttpCode(): int;

    /**
     * Returns the body that has to be sent along with the response
     * @return string
     */
    public function getBody(): string;

    /**
     * Returns the headers that has to be sent with the response
     * @return array
     */
    public function getHeaders(): array;
}