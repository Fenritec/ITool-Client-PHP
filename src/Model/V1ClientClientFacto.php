<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ClientClientFacto extends \ArrayObject
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
    protected $cmrCode;
    /**
     * 
     *
     * @var int
     */
    protected $crglId;
    /**
     * 
     *
     * @return string
     */
    public function getCmrCode() : string
    {
        return $this->cmrCode;
    }
    /**
     * 
     *
     * @param string $cmrCode
     *
     * @return self
     */
    public function setCmrCode(string $cmrCode) : self
    {
        $this->initialized['cmrCode'] = true;
        $this->cmrCode = $cmrCode;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCrglId() : int
    {
        return $this->crglId;
    }
    /**
     * 
     *
     * @param int $crglId
     *
     * @return self
     */
    public function setCrglId(int $crglId) : self
    {
        $this->initialized['crglId'] = true;
        $this->crglId = $crglId;
        return $this;
    }
}