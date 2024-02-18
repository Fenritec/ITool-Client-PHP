<?php

namespace FenritecEu\ItoolClientPhp\Endpoint;

class V1ClientDelete extends \FenritecEu\ItoolClientPhp\Runtime\Client\BaseEndpoint implements \FenritecEu\ItoolClientPhp\Runtime\Client\Endpoint
{
    protected $DosId;
    protected $TrsId;
    /**
     * Supprimer un client
     *
     * @param string $dosId 
     * @param string $trsId 
     */
    public function __construct(string $dosId, string $trsId)
    {
        $this->DosId = $dosId;
        $this->TrsId = $trsId;
    }
    use \FenritecEu\ItoolClientPhp\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{DosId}', '{TrsId}'], [$this->DosId, $this->TrsId], '/v1/api/dossiers/{DosId}/tiers/client/{TrsId}');
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
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200', 'json');
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