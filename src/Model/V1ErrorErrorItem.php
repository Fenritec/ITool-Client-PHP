<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1ErrorErrorItem extends \ArrayObject
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
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $propertyPath;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropertyPath() : string
    {
        return $this->propertyPath;
    }
    /**
     * 
     *
     * @param string $propertyPath
     *
     * @return self
     */
    public function setPropertyPath(string $propertyPath) : self
    {
        $this->initialized['propertyPath'] = true;
        $this->propertyPath = $propertyPath;
        return $this;
    }
}