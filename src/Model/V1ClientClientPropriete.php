<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ClientClientPropriete extends \ArrayObject
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
     * @var string
     */
    protected $rtvDesignation;
    /**
     * 
     *
     * @var string
     */
    protected $compte;
    /**
     * 
     *
     * @var string
     */
    protected $sousCompte;
    /**
     * 
     *
     * @return string
     */
    public function getRtvDesignation() : string
    {
        return $this->rtvDesignation;
    }
    /**
     * 
     *
     * @param string $rtvDesignation
     *
     * @return self
     */
    public function setRtvDesignation(string $rtvDesignation) : self
    {
        $this->initialized['rtvDesignation'] = true;
        $this->rtvDesignation = $rtvDesignation;
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
    /**
     * 
     *
     * @return string
     */
    public function getSousCompte() : string
    {
        return $this->sousCompte;
    }
    /**
     * 
     *
     * @param string $sousCompte
     *
     * @return self
     */
    public function setSousCompte(string $sousCompte) : self
    {
        $this->initialized['sousCompte'] = true;
        $this->sousCompte = $sousCompte;
        return $this;
    }
}