<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1AdresseEtendue extends \ArrayObject
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
    protected $adrId;
    /**
     * 
     *
     * @var string
     */
    protected $adrRaisonSociale;
    /**
     * 
     *
     * @var string
     */
    protected $adrAdresse;
    /**
     * 
     *
     * @var string
     */
    protected $adrCodePostal;
    /**
     * 
     *
     * @var string
     */
    protected $adrLocalite;
    /**
     * 
     *
     * @var string
     */
    protected $adrPays;
    /**
     * 
     *
     * @var string
     */
    protected $adrCodePays;
    /**
     * 
     *
     * @return int
     */
    public function getAdrId() : int
    {
        return $this->adrId;
    }
    /**
     * 
     *
     * @param int $adrId
     *
     * @return self
     */
    public function setAdrId(int $adrId) : self
    {
        $this->initialized['adrId'] = true;
        $this->adrId = $adrId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrRaisonSociale() : string
    {
        return $this->adrRaisonSociale;
    }
    /**
     * 
     *
     * @param string $adrRaisonSociale
     *
     * @return self
     */
    public function setAdrRaisonSociale(string $adrRaisonSociale) : self
    {
        $this->initialized['adrRaisonSociale'] = true;
        $this->adrRaisonSociale = $adrRaisonSociale;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrAdresse() : string
    {
        return $this->adrAdresse;
    }
    /**
     * 
     *
     * @param string $adrAdresse
     *
     * @return self
     */
    public function setAdrAdresse(string $adrAdresse) : self
    {
        $this->initialized['adrAdresse'] = true;
        $this->adrAdresse = $adrAdresse;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrCodePostal() : string
    {
        return $this->adrCodePostal;
    }
    /**
     * 
     *
     * @param string $adrCodePostal
     *
     * @return self
     */
    public function setAdrCodePostal(string $adrCodePostal) : self
    {
        $this->initialized['adrCodePostal'] = true;
        $this->adrCodePostal = $adrCodePostal;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrLocalite() : string
    {
        return $this->adrLocalite;
    }
    /**
     * 
     *
     * @param string $adrLocalite
     *
     * @return self
     */
    public function setAdrLocalite(string $adrLocalite) : self
    {
        $this->initialized['adrLocalite'] = true;
        $this->adrLocalite = $adrLocalite;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrPays() : string
    {
        return $this->adrPays;
    }
    /**
     * 
     *
     * @param string $adrPays
     *
     * @return self
     */
    public function setAdrPays(string $adrPays) : self
    {
        $this->initialized['adrPays'] = true;
        $this->adrPays = $adrPays;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdrCodePays() : string
    {
        return $this->adrCodePays;
    }
    /**
     * 
     *
     * @param string $adrCodePays
     *
     * @return self
     */
    public function setAdrCodePays(string $adrCodePays) : self
    {
        $this->initialized['adrCodePays'] = true;
        $this->adrCodePays = $adrCodePays;
        return $this;
    }
}