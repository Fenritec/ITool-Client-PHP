<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ApiDossiersGetResponse200 extends \ArrayObject
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
     * @var V1Dossier[]
     */
    protected $data;
    /**
     * 
     *
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @var float
     */
    protected $total;
    /**
     * 
     *
     * @return V1Dossier[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param V1Dossier[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotal() : float
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal(float $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}