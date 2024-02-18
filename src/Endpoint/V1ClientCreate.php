<?php

namespace FenritecEu\ItoolClientPhp\Endpoint;

class V1ClientCreate extends \FenritecEu\ItoolClientPhp\Runtime\Client\BaseEndpoint implements \FenritecEu\ItoolClientPhp\Runtime\Client\Endpoint
{
    protected $DosId;
    /**
     * Créer un client
     *
     * @param string $dosId 
     * @param null|\FenritecEu\ItoolClientPhp\Model\V1Client $requestBody 
     */
    public function __construct(string $dosId, ?\FenritecEu\ItoolClientPhp\Model\V1Client $requestBody = null)
    {
        $this->DosId = $dosId;
        $this->body = $requestBody;
    }
    use \FenritecEu\ItoolClientPhp\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{DosId}'], [$this->DosId], '/v1/api/dossiers/{DosId}/tiers/client');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \FenritecEu\ItoolClientPhp\Model\V1Client) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientPostResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientPostResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'FenritecEu\\ItoolClientPhp\\Model\\V1Error', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['API-key'];
    }
}