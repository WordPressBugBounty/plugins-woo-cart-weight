<?php

namespace WCWeightVendor\Psr\Http\Client;

use WCWeightVendor\Psr\Http\Message\RequestInterface;
use WCWeightVendor\Psr\Http\Message\ResponseInterface;
interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(\WCWeightVendor\Psr\Http\Message\RequestInterface $request) : \WCWeightVendor\Psr\Http\Message\ResponseInterface;
}
