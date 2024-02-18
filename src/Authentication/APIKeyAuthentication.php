<?php

namespace FenritecEu\ItoolClientPhp\Authentication;

class APIKeyAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('apiToken', $this->{'apiKey'});
        return $request;
    }
    public function getScope() : string
    {
        return 'API-key';
    }
}