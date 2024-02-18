<?php

namespace FenritecEu\ItoolClientPhp\Model;

class V1Client extends \ArrayObject
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
    protected $trsId;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $trsRaisonSociale;
    /**
     * 
     *
     * @var string
     */
    protected $famDesignation;
    /**
     * 
     *
     * @var string
     */
    protected $formeJuridique;
    /**
     * 
     *
     * @var string
     */
    protected $trsObservation;
    /**
     * 
     *
     * @var string
     */
    protected $trsNumeroTVA;
    /**
     * 
     *
     * @var string
     */
    protected $tauxRemise;
    /**
     * 
     *
     * @var string
     */
    protected $numeroTel;
    /**
     * 
     *
     * @var string
     */
    protected $numeroFax;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $urlSite;
    /**
     * 
     *
     * @var string
     */
    protected $urlLien;
    /**
     * 
     *
     * @var V1ClientClientPropriete
     */
    protected $clientPropriete;
    /**
     * 
     *
     * @var V1ClientClientFacto
     */
    protected $clientFacto;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $adrFacturation;
    /**
     * 
     *
     * @var array<string, mixed>[]
     */
    protected $adrLivraison;
    /**
     * 
     *
     * @var V1Adresse
     */
    protected $adrClient;
    /**
     * 
     *
     * @var V1ClientContact
     */
    protected $contact;
    /**
     * 
     *
     * @var string
     */
    protected $trsTypeClient;
    /**
     * 
     *
     * @var string
     */
    protected $trsCodeServiceAcheteur;
    /**
     * 
     *
     * @var string
     */
    protected $trsSiret;
    /**
     * 
     *
     * @return int
     */
    public function getTrsId() : int
    {
        return $this->trsId;
    }
    /**
     * 
     *
     * @param int $trsId
     *
     * @return self
     */
    public function setTrsId(int $trsId) : self
    {
        $this->initialized['trsId'] = true;
        $this->trsId = $trsId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsRaisonSociale() : string
    {
        return $this->trsRaisonSociale;
    }
    /**
     * 
     *
     * @param string $trsRaisonSociale
     *
     * @return self
     */
    public function setTrsRaisonSociale(string $trsRaisonSociale) : self
    {
        $this->initialized['trsRaisonSociale'] = true;
        $this->trsRaisonSociale = $trsRaisonSociale;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFamDesignation() : string
    {
        return $this->famDesignation;
    }
    /**
     * 
     *
     * @param string $famDesignation
     *
     * @return self
     */
    public function setFamDesignation(string $famDesignation) : self
    {
        $this->initialized['famDesignation'] = true;
        $this->famDesignation = $famDesignation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFormeJuridique() : string
    {
        return $this->formeJuridique;
    }
    /**
     * 
     *
     * @param string $formeJuridique
     *
     * @return self
     */
    public function setFormeJuridique(string $formeJuridique) : self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsObservation() : string
    {
        return $this->trsObservation;
    }
    /**
     * 
     *
     * @param string $trsObservation
     *
     * @return self
     */
    public function setTrsObservation(string $trsObservation) : self
    {
        $this->initialized['trsObservation'] = true;
        $this->trsObservation = $trsObservation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsNumeroTVA() : string
    {
        return $this->trsNumeroTVA;
    }
    /**
     * 
     *
     * @param string $trsNumeroTVA
     *
     * @return self
     */
    public function setTrsNumeroTVA(string $trsNumeroTVA) : self
    {
        $this->initialized['trsNumeroTVA'] = true;
        $this->trsNumeroTVA = $trsNumeroTVA;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTauxRemise() : string
    {
        return $this->tauxRemise;
    }
    /**
     * 
     *
     * @param string $tauxRemise
     *
     * @return self
     */
    public function setTauxRemise(string $tauxRemise) : self
    {
        $this->initialized['tauxRemise'] = true;
        $this->tauxRemise = $tauxRemise;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumeroTel() : string
    {
        return $this->numeroTel;
    }
    /**
     * 
     *
     * @param string $numeroTel
     *
     * @return self
     */
    public function setNumeroTel(string $numeroTel) : self
    {
        $this->initialized['numeroTel'] = true;
        $this->numeroTel = $numeroTel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumeroFax() : string
    {
        return $this->numeroFax;
    }
    /**
     * 
     *
     * @param string $numeroFax
     *
     * @return self
     */
    public function setNumeroFax(string $numeroFax) : self
    {
        $this->initialized['numeroFax'] = true;
        $this->numeroFax = $numeroFax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrlSite() : string
    {
        return $this->urlSite;
    }
    /**
     * 
     *
     * @param string $urlSite
     *
     * @return self
     */
    public function setUrlSite(string $urlSite) : self
    {
        $this->initialized['urlSite'] = true;
        $this->urlSite = $urlSite;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrlLien() : string
    {
        return $this->urlLien;
    }
    /**
     * 
     *
     * @param string $urlLien
     *
     * @return self
     */
    public function setUrlLien(string $urlLien) : self
    {
        $this->initialized['urlLien'] = true;
        $this->urlLien = $urlLien;
        return $this;
    }
    /**
     * 
     *
     * @return V1ClientClientPropriete
     */
    public function getClientPropriete() : V1ClientClientPropriete
    {
        return $this->clientPropriete;
    }
    /**
     * 
     *
     * @param V1ClientClientPropriete $clientPropriete
     *
     * @return self
     */
    public function setClientPropriete(V1ClientClientPropriete $clientPropriete) : self
    {
        $this->initialized['clientPropriete'] = true;
        $this->clientPropriete = $clientPropriete;
        return $this;
    }
    /**
     * 
     *
     * @return V1ClientClientFacto
     */
    public function getClientFacto() : V1ClientClientFacto
    {
        return $this->clientFacto;
    }
    /**
     * 
     *
     * @param V1ClientClientFacto $clientFacto
     *
     * @return self
     */
    public function setClientFacto(V1ClientClientFacto $clientFacto) : self
    {
        $this->initialized['clientFacto'] = true;
        $this->clientFacto = $clientFacto;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getAdrFacturation() : iterable
    {
        return $this->adrFacturation;
    }
    /**
     * 
     *
     * @param array<string, mixed> $adrFacturation
     *
     * @return self
     */
    public function setAdrFacturation(iterable $adrFacturation) : self
    {
        $this->initialized['adrFacturation'] = true;
        $this->adrFacturation = $adrFacturation;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>[]
     */
    public function getAdrLivraison() : array
    {
        return $this->adrLivraison;
    }
    /**
     * 
     *
     * @param array<string, mixed>[] $adrLivraison
     *
     * @return self
     */
    public function setAdrLivraison(array $adrLivraison) : self
    {
        $this->initialized['adrLivraison'] = true;
        $this->adrLivraison = $adrLivraison;
        return $this;
    }
    /**
     * 
     *
     * @return V1Adresse
     */
    public function getAdrClient() : V1Adresse
    {
        return $this->adrClient;
    }
    /**
     * 
     *
     * @param V1Adresse $adrClient
     *
     * @return self
     */
    public function setAdrClient(V1Adresse $adrClient) : self
    {
        $this->initialized['adrClient'] = true;
        $this->adrClient = $adrClient;
        return $this;
    }
    /**
     * 
     *
     * @return V1ClientContact
     */
    public function getContact() : V1ClientContact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param V1ClientContact $contact
     *
     * @return self
     */
    public function setContact(V1ClientContact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsTypeClient() : string
    {
        return $this->trsTypeClient;
    }
    /**
     * 
     *
     * @param string $trsTypeClient
     *
     * @return self
     */
    public function setTrsTypeClient(string $trsTypeClient) : self
    {
        $this->initialized['trsTypeClient'] = true;
        $this->trsTypeClient = $trsTypeClient;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsCodeServiceAcheteur() : string
    {
        return $this->trsCodeServiceAcheteur;
    }
    /**
     * 
     *
     * @param string $trsCodeServiceAcheteur
     *
     * @return self
     */
    public function setTrsCodeServiceAcheteur(string $trsCodeServiceAcheteur) : self
    {
        $this->initialized['trsCodeServiceAcheteur'] = true;
        $this->trsCodeServiceAcheteur = $trsCodeServiceAcheteur;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrsSiret() : string
    {
        return $this->trsSiret;
    }
    /**
     * 
     *
     * @param string $trsSiret
     *
     * @return self
     */
    public function setTrsSiret(string $trsSiret) : self
    {
        $this->initialized['trsSiret'] = true;
        $this->trsSiret = $trsSiret;
        return $this;
    }
}