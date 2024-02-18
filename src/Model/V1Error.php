<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1Error extends \ArrayObject
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
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @var V1ErrorErrorItem[]
     */
    protected $error;
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
     * @return V1ErrorErrorItem[]
     */
    public function getError() : array
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param V1ErrorErrorItem[] $error
     *
     * @return self
     */
    public function setError(array $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}