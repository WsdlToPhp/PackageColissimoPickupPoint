<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPointRetraitAcheminementByID StructType
 * Meta information extracted from the WSDL
 * - type: tns:findPointRetraitAcheminementByID
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindPointRetraitAcheminementByID extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The apikey
     * Meta information extracted from the WSDL
     * - default:
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $apikey = null;
    /**
     * The codTiersPourPartenaire
     * Meta information extracted from the WSDL
     * - default:
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $codTiersPourPartenaire = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The filterRelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterRelay = null;
    /**
     * The reseau
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reseau = null;
    /**
     * The langue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $langue = null;
    /**
     * Constructor method for findPointRetraitAcheminementByID
     * @uses FindPointRetraitAcheminementByID::setAccountNumber()
     * @uses FindPointRetraitAcheminementByID::setPassword()
     * @uses FindPointRetraitAcheminementByID::setApikey()
     * @uses FindPointRetraitAcheminementByID::setCodTiersPourPartenaire()
     * @uses FindPointRetraitAcheminementByID::setId()
     * @uses FindPointRetraitAcheminementByID::setDate()
     * @uses FindPointRetraitAcheminementByID::setWeight()
     * @uses FindPointRetraitAcheminementByID::setFilterRelay()
     * @uses FindPointRetraitAcheminementByID::setReseau()
     * @uses FindPointRetraitAcheminementByID::setLangue()
     * @param string $accountNumber
     * @param string $password
     * @param string $apikey
     * @param string $codTiersPourPartenaire
     * @param string $id
     * @param string $date
     * @param string $weight
     * @param string $filterRelay
     * @param string $reseau
     * @param string $langue
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $apikey = '', ?string $codTiersPourPartenaire = '', ?string $id = null, ?string $date = null, ?string $weight = null, ?string $filterRelay = null, ?string $reseau = null, ?string $langue = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setApikey($apikey)
            ->setCodTiersPourPartenaire($codTiersPourPartenaire)
            ->setId($id)
            ->setDate($date)
            ->setWeight($weight)
            ->setFilterRelay($filterRelay)
            ->setReseau($reseau)
            ->setLangue($langue);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get apikey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getApikey(): ?string
    {
        return isset($this->apikey) ? $this->apikey : null;
    }
    /**
     * Set apikey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $apikey
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setApikey(?string $apikey = ''): self
    {
        // validation for constraint: string
        if (!is_null($apikey) && !is_string($apikey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apikey, true), gettype($apikey)), __LINE__);
        }
        if (is_null($apikey) || (is_array($apikey) && empty($apikey))) {
            unset($this->apikey);
        } else {
            $this->apikey = $apikey;
        }
        
        return $this;
    }
    /**
     * Get codTiersPourPartenaire value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodTiersPourPartenaire(): ?string
    {
        return isset($this->codTiersPourPartenaire) ? $this->codTiersPourPartenaire : null;
    }
    /**
     * Set codTiersPourPartenaire value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codTiersPourPartenaire
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setCodTiersPourPartenaire(?string $codTiersPourPartenaire = ''): self
    {
        // validation for constraint: string
        if (!is_null($codTiersPourPartenaire) && !is_string($codTiersPourPartenaire)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codTiersPourPartenaire, true), gettype($codTiersPourPartenaire)), __LINE__);
        }
        if (is_null($codTiersPourPartenaire) || (is_array($codTiersPourPartenaire) && empty($codTiersPourPartenaire))) {
            unset($this->codTiersPourPartenaire);
        } else {
            $this->codTiersPourPartenaire = $codTiersPourPartenaire;
        }
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get filterRelay value
     * @return string|null
     */
    public function getFilterRelay(): ?string
    {
        return $this->filterRelay;
    }
    /**
     * Set filterRelay value
     * @param string $filterRelay
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setFilterRelay(?string $filterRelay = null): self
    {
        // validation for constraint: string
        if (!is_null($filterRelay) && !is_string($filterRelay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterRelay, true), gettype($filterRelay)), __LINE__);
        }
        $this->filterRelay = $filterRelay;
        
        return $this;
    }
    /**
     * Get reseau value
     * @return string|null
     */
    public function getReseau(): ?string
    {
        return $this->reseau;
    }
    /**
     * Set reseau value
     * @param string $reseau
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setReseau(?string $reseau = null): self
    {
        // validation for constraint: string
        if (!is_null($reseau) && !is_string($reseau)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reseau, true), gettype($reseau)), __LINE__);
        }
        $this->reseau = $reseau;
        
        return $this;
    }
    /**
     * Get langue value
     * @return string|null
     */
    public function getLangue(): ?string
    {
        return $this->langue;
    }
    /**
     * Set langue value
     * @param string $langue
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID
     */
    public function setLangue(?string $langue = null): self
    {
        // validation for constraint: string
        if (!is_null($langue) && !is_string($langue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($langue, true), gettype($langue)), __LINE__);
        }
        $this->langue = $langue;
        
        return $this;
    }
}
