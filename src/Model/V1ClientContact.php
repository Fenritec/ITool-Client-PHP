<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ClientContact extends \ArrayObject
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
    protected $conId;
    /**
     * 
     *
     * @var string
     */
    protected $conTitre;
    /**
     * 
     *
     * @var string
     */
    protected $conNom;
    /**
     * 
     *
     * @var string
     */
    protected $conFonction;
    /**
     * 
     *
     * @var string
     */
    protected $conObservation;
    /**
     * 
     *
     * @var bool
     */
    protected $conDefault;
    /**
     * 
     *
     * @var string
     */
    protected $conEmail;
    /**
     * 
     *
     * @var string
     */
    protected $conTelephone;
    /**
     * 
     *
     * @var string
     */
    protected $conPortable;
    /**
     * 
     *
     * @var string
     */
    protected $conFax;
    /**
     * 
     *
     * @var array<string, mixed>[]
     */
    protected $adresses;
    /**
     * 
     *
     * @return int
     */
    public function getConId() : int
    {
        return $this->conId;
    }
    /**
     * 
     *
     * @param int $conId
     *
     * @return self
     */
    public function setConId(int $conId) : self
    {
        $this->initialized['conId'] = true;
        $this->conId = $conId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConTitre() : string
    {
        return $this->conTitre;
    }
    /**
     * 
     *
     * @param string $conTitre
     *
     * @return self
     */
    public function setConTitre(string $conTitre) : self
    {
        $this->initialized['conTitre'] = true;
        $this->conTitre = $conTitre;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConNom() : string
    {
        return $this->conNom;
    }
    /**
     * 
     *
     * @param string $conNom
     *
     * @return self
     */
    public function setConNom(string $conNom) : self
    {
        $this->initialized['conNom'] = true;
        $this->conNom = $conNom;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConFonction() : string
    {
        return $this->conFonction;
    }
    /**
     * 
     *
     * @param string $conFonction
     *
     * @return self
     */
    public function setConFonction(string $conFonction) : self
    {
        $this->initialized['conFonction'] = true;
        $this->conFonction = $conFonction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConObservation() : string
    {
        return $this->conObservation;
    }
    /**
     * 
     *
     * @param string $conObservation
     *
     * @return self
     */
    public function setConObservation(string $conObservation) : self
    {
        $this->initialized['conObservation'] = true;
        $this->conObservation = $conObservation;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getConDefault() : bool
    {
        return $this->conDefault;
    }
    /**
     * 
     *
     * @param bool $conDefault
     *
     * @return self
     */
    public function setConDefault(bool $conDefault) : self
    {
        $this->initialized['conDefault'] = true;
        $this->conDefault = $conDefault;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConEmail() : string
    {
        return $this->conEmail;
    }
    /**
     * 
     *
     * @param string $conEmail
     *
     * @return self
     */
    public function setConEmail(string $conEmail) : self
    {
        $this->initialized['conEmail'] = true;
        $this->conEmail = $conEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConTelephone() : string
    {
        return $this->conTelephone;
    }
    /**
     * 
     *
     * @param string $conTelephone
     *
     * @return self
     */
    public function setConTelephone(string $conTelephone) : self
    {
        $this->initialized['conTelephone'] = true;
        $this->conTelephone = $conTelephone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConPortable() : string
    {
        return $this->conPortable;
    }
    /**
     * 
     *
     * @param string $conPortable
     *
     * @return self
     */
    public function setConPortable(string $conPortable) : self
    {
        $this->initialized['conPortable'] = true;
        $this->conPortable = $conPortable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConFax() : string
    {
        return $this->conFax;
    }
    /**
     * 
     *
     * @param string $conFax
     *
     * @return self
     */
    public function setConFax(string $conFax) : self
    {
        $this->initialized['conFax'] = true;
        $this->conFax = $conFax;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>[]
     */
    public function getAdresses() : array
    {
        return $this->adresses;
    }
    /**
     * 
     *
     * @param array<string, mixed>[] $adresses
     *
     * @return self
     */
    public function setAdresses(array $adresses) : self
    {
        $this->initialized['adresses'] = true;
        $this->adresses = $adresses;
        return $this;
    }
}