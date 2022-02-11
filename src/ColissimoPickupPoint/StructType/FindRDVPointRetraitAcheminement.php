<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findRDVPointRetraitAcheminement StructType
 * Meta information extracted from the WSDL
 * - type: tns:findRDVPointRetraitAcheminement
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindRDVPointRetraitAcheminement extends AbstractStructBase
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
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * The filterRelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterRelay = null;
    /**
     * The requestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $requestId = null;
    /**
     * The lang
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lang = null;
    /**
     * The optionInter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $optionInter = null;
    /**
     * Constructor method for findRDVPointRetraitAcheminement
     * @uses FindRDVPointRetraitAcheminement::setAccountNumber()
     * @uses FindRDVPointRetraitAcheminement::setPassword()
     * @uses FindRDVPointRetraitAcheminement::setApikey()
     * @uses FindRDVPointRetraitAcheminement::setCodTiersPourPartenaire()
     * @uses FindRDVPointRetraitAcheminement::setAddress()
     * @uses FindRDVPointRetraitAcheminement::setZipCode()
     * @uses FindRDVPointRetraitAcheminement::setCity()
     * @uses FindRDVPointRetraitAcheminement::setCountryCode()
     * @uses FindRDVPointRetraitAcheminement::setWeight()
     * @uses FindRDVPointRetraitAcheminement::setShippingDate()
     * @uses FindRDVPointRetraitAcheminement::setFilterRelay()
     * @uses FindRDVPointRetraitAcheminement::setRequestId()
     * @uses FindRDVPointRetraitAcheminement::setLang()
     * @uses FindRDVPointRetraitAcheminement::setOptionInter()
     * @param string $accountNumber
     * @param string $password
     * @param string $apikey
     * @param string $codTiersPourPartenaire
     * @param string $address
     * @param string $zipCode
     * @param string $city
     * @param string $countryCode
     * @param string $weight
     * @param string $shippingDate
     * @param string $filterRelay
     * @param string $requestId
     * @param string $lang
     * @param string $optionInter
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $apikey = '', ?string $codTiersPourPartenaire = '', ?string $address = null, ?string $zipCode = null, ?string $city = null, ?string $countryCode = null, ?string $weight = null, ?string $shippingDate = null, ?string $filterRelay = null, ?string $requestId = null, ?string $lang = null, ?string $optionInter = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setApikey($apikey)
            ->setCodTiersPourPartenaire($codTiersPourPartenaire)
            ->setAddress($address)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setWeight($weight)
            ->setShippingDate($shippingDate)
            ->setFilterRelay($filterRelay)
            ->setRequestId($requestId)
            ->setLang($lang)
            ->setOptionInter($optionInter);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * Get address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * Get requestId value
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setRequestId(?string $requestId = null): self
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setLang(?string $lang = null): self
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        
        return $this;
    }
    /**
     * Get optionInter value
     * @return string|null
     */
    public function getOptionInter(): ?string
    {
        return $this->optionInter;
    }
    /**
     * Set optionInter value
     * @param string $optionInter
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setOptionInter(?string $optionInter = null): self
    {
        // validation for constraint: string
        if (!is_null($optionInter) && !is_string($optionInter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionInter, true), gettype($optionInter)), __LINE__);
        }
        $this->optionInter = $optionInter;
        
        return $this;
    }
}
