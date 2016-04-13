<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findInternalRDVPointRetraitAcheminement StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findInternalRDVPointRetraitAcheminement
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindInternalRDVPointRetraitAcheminement extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The zipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The shippingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingDate;
    /**
     * The filterRelay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filterRelay;
    /**
     * The requestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestId;
    /**
     * The lang
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lang;
    /**
     * The optionInter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $optionInter;
    /**
     * Constructor method for findInternalRDVPointRetraitAcheminement
     * @uses FindInternalRDVPointRetraitAcheminement::setAccountNumber()
     * @uses FindInternalRDVPointRetraitAcheminement::setPassword()
     * @uses FindInternalRDVPointRetraitAcheminement::setAddress()
     * @uses FindInternalRDVPointRetraitAcheminement::setZipCode()
     * @uses FindInternalRDVPointRetraitAcheminement::setCity()
     * @uses FindInternalRDVPointRetraitAcheminement::setCountryCode()
     * @uses FindInternalRDVPointRetraitAcheminement::setWeight()
     * @uses FindInternalRDVPointRetraitAcheminement::setShippingDate()
     * @uses FindInternalRDVPointRetraitAcheminement::setFilterRelay()
     * @uses FindInternalRDVPointRetraitAcheminement::setRequestId()
     * @uses FindInternalRDVPointRetraitAcheminement::setLang()
     * @uses FindInternalRDVPointRetraitAcheminement::setOptionInter()
     * @param string $accountNumber
     * @param string $password
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
    public function __construct($accountNumber = null, $password = null, $address = null, $zipCode = null, $city = null, $countryCode = null, $weight = null, $shippingDate = null, $filterRelay = null, $requestId = null, $lang = null, $optionInter = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
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
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        return $this;
    }
    /**
     * Get filterRelay value
     * @return string|null
     */
    public function getFilterRelay()
    {
        return $this->filterRelay;
    }
    /**
     * Set filterRelay value
     * @param string $filterRelay
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setFilterRelay($filterRelay = null)
    {
        // validation for constraint: string
        if (!is_null($filterRelay) && !is_string($filterRelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filterRelay)), __LINE__);
        }
        $this->filterRelay = $filterRelay;
        return $this;
    }
    /**
     * Get requestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get optionInter value
     * @return string|null
     */
    public function getOptionInter()
    {
        return $this->optionInter;
    }
    /**
     * Set optionInter value
     * @param string $optionInter
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public function setOptionInter($optionInter = null)
    {
        // validation for constraint: string
        if (!is_null($optionInter) && !is_string($optionInter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionInter)), __LINE__);
        }
        $this->optionInter = $optionInter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
