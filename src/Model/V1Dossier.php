<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1Dossier extends \ArrayObject
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
    protected $dosId;
    /**
     * 
     *
     * @var string
     */
    protected $designation;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $dateOuvertureExercice;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $dateFinExercice;
    /**
     * 
     *
     * @var bool
     */
    protected $isCe;
    /**
     * 
     *
     * @var bool
     */
    protected $isCe2;
    /**
     * 
     *
     * @var bool
     */
    protected $isCompta;
    /**
     * 
     *
     * @var bool
     */
    protected $isFacto;
    /**
     * 
     *
     * @var bool
     */
    protected $isAssurance;
    /**
     * 
     *
     * @return int
     */
    public function getDosId() : int
    {
        return $this->dosId;
    }
    /**
     * 
     *
     * @param int $dosId
     *
     * @return self
     */
    public function setDosId(int $dosId) : self
    {
        $this->initialized['dosId'] = true;
        $this->dosId = $dosId;
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
     * @return \DateTime
     */
    public function getDateOuvertureExercice() : \DateTime
    {
        return $this->dateOuvertureExercice;
    }
    /**
     * 
     *
     * @param \DateTime $dateOuvertureExercice
     *
     * @return self
     */
    public function setDateOuvertureExercice(\DateTime $dateOuvertureExercice) : self
    {
        $this->initialized['dateOuvertureExercice'] = true;
        $this->dateOuvertureExercice = $dateOuvertureExercice;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDateFinExercice() : \DateTime
    {
        return $this->dateFinExercice;
    }
    /**
     * 
     *
     * @param \DateTime $dateFinExercice
     *
     * @return self
     */
    public function setDateFinExercice(\DateTime $dateFinExercice) : self
    {
        $this->initialized['dateFinExercice'] = true;
        $this->dateFinExercice = $dateFinExercice;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsCe() : bool
    {
        return $this->isCe;
    }
    /**
     * 
     *
     * @param bool $isCe
     *
     * @return self
     */
    public function setIsCe(bool $isCe) : self
    {
        $this->initialized['isCe'] = true;
        $this->isCe = $isCe;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsCe2() : bool
    {
        return $this->isCe2;
    }
    /**
     * 
     *
     * @param bool $isCe2
     *
     * @return self
     */
    public function setIsCe2(bool $isCe2) : self
    {
        $this->initialized['isCe2'] = true;
        $this->isCe2 = $isCe2;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsCompta() : bool
    {
        return $this->isCompta;
    }
    /**
     * 
     *
     * @param bool $isCompta
     *
     * @return self
     */
    public function setIsCompta(bool $isCompta) : self
    {
        $this->initialized['isCompta'] = true;
        $this->isCompta = $isCompta;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsFacto() : bool
    {
        return $this->isFacto;
    }
    /**
     * 
     *
     * @param bool $isFacto
     *
     * @return self
     */
    public function setIsFacto(bool $isFacto) : self
    {
        $this->initialized['isFacto'] = true;
        $this->isFacto = $isFacto;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAssurance() : bool
    {
        return $this->isAssurance;
    }
    /**
     * 
     *
     * @param bool $isAssurance
     *
     * @return self
     */
    public function setIsAssurance(bool $isAssurance) : self
    {
        $this->initialized['isAssurance'] = true;
        $this->isAssurance = $isAssurance;
        return $this;
    }
}