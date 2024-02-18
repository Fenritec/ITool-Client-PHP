<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1FamilleClient extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $tfaId;
    /**
     * 
     *
     * @var string
     */
    protected $designation;
    /**
     * 
     *
     * @var float
     */
    protected $tauxRemise;
    /**
     * 
     *
     * @var int
     */
    protected $nrClient;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $familleVarianteClients;
    /**
     * 
     *
     * @var string
     */
    protected $compte;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTfaId() : int
    {
        return $this->tfaId;
    }
    /**
     * 
     *
     * @param int $tfaId
     *
     * @return self
     */
    public function setTfaId(int $tfaId) : self
    {
        $this->initialized['tfaId'] = true;
        $this->tfaId = $tfaId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDesignation() : string
    {
        return $this->designation;
    }
    /**
     * 
     *
     * @param string $designation
     *
     * @return self
     */
    public function setDesignation(string $designation) : self
    {
        $this->initialized['designation'] = true;
        $this->designation = $designation;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTauxRemise() : float
    {
        return $this->tauxRemise;
    }
    /**
     * 
     *
     * @param float $tauxRemise
     *
     * @return self
     */
    public function setTauxRemise(float $tauxRemise) : self
    {
        $this->initialized['tauxRemise'] = true;
        $this->tauxRemise = $tauxRemise;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNrClient() : int
    {
        return $this->nrClient;
    }
    /**
     * 
     *
     * @param int $nrClient
     *
     * @return self
     */
    public function setNrClient(int $nrClient) : self
    {
        $this->initialized['nrClient'] = true;
        $this->nrClient = $nrClient;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getFamilleVarianteClients() : iterable
    {
        return $this->familleVarianteClients;
    }
    /**
     * 
     *
     * @param array<string, mixed> $familleVarianteClients
     *
     * @return self
     */
    public function setFamilleVarianteClients(iterable $familleVarianteClients) : self
    {
        $this->initialized['familleVarianteClients'] = true;
        $this->familleVarianteClients = $familleVarianteClients;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompte() : string
    {
        return $this->compte;
    }
    /**
     * 
     *
     * @param string $compte
     *
     * @return self
     */
    public function setCompte(string $compte) : self
    {
        $this->initialized['compte'] = true;
        $this->compte = $compte;
        return $this;
    }
}