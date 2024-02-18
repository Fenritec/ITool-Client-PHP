<?php

namespace FenritecEu\ItoolClientPhp;

class Client extends \FenritecEu\ItoolClientPhp\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersGetResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1DossierList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1DossierList(), $fetch);
    }
    /**
     * Lister les clients
     *
     * @param string $dosId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientGetResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1ClientList(string $dosId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1ClientList($dosId), $fetch);
    }
    /**
     * Créer un client
     *
     * @param string $dosId 
     * @param null|\FenritecEu\ItoolClientPhp\Model\V1Client $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientPostResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1ClientCreate(string $dosId, ?\FenritecEu\ItoolClientPhp\Model\V1Client $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1ClientCreate($dosId, $requestBody), $fetch);
    }
    /**
     * Supprimer un client
     *
     * @param string $dosId 
     * @param string $trsId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1ClientDelete(string $dosId, string $trsId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1ClientDelete($dosId, $trsId), $fetch);
    }
    /**
     * Récupérer un client
     *
     * @param string $dosId 
     * @param string $trsId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1Client|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1ClientGet(string $dosId, string $trsId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1ClientGet($dosId, $trsId), $fetch);
    }
    /**
     * Lister les familles de client
     *
     * @param string $dosId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\FenritecEu\ItoolClientPhp\Model\V1ApiDossiersDosIdTiersFamillesGetResponse200|\FenritecEu\ItoolClientPhp\Model\V1Error|\Psr\Http\Message\ResponseInterface
     */
    public function v1FamilleClientList(string $dosId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \FenritecEu\ItoolClientPhp\Endpoint\V1FamilleClientList($dosId), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://applis.itool.net/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \FenritecEu\ItoolClientPhp\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}