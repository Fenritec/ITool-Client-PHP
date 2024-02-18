<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ApiDossiersDosIdTiersFamillesGetResponse200 extends \ArrayObject
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
     * @var V1FamilleClient[]
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
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return V1FamilleClient[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param V1FamilleClient[] $data
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
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}