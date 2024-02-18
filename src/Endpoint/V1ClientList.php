<?php

namespace FenritecEu\ItoolClientPhp\Endpoint;

class V1ClientList extends \FenritecEu\ItoolClientPhp\Runtime\Client\BaseEndpoint implements \FenritecEu\ItoolClientPhp\Runtime\Client\Endpoint
{
    protected $DosId;
    /**
     * Lister les clients
     *
     * @param string $dosId 
     */
    public function __construct(string $dosId)
    {
        $this->DosId = $dosId;
    }
    use \FenritecEu\ItoolClientPhp\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{DosId}'], [$this->DosId], '/v1/api/dossiers/{DosId}/tiers/client');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientGetResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientGetResponse200', 'json');
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