<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findRDVPointRetraitAcheminementByToken StructType
 * Meta information extracted from the WSDL
 * - type: tns:findRDVPointRetraitAcheminementByToken
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindRDVPointRetraitAcheminementByToken extends AbstractStructBase
{
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingDate;
    /**
     * The filterRelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filterRelay;
    /**
     * The requestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestId;
    /**
     * The lang
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lang;
    /**
     * The optionInter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $optionInter;
    /**
     * Constructor method for findRDVPointRetraitAcheminementByToken
     * @uses FindRDVPointRetraitAcheminementByToken::setToken()
     * @uses FindRDVPointRetraitAcheminementByToken::setAddress()
     * @uses FindRDVPointRetraitAcheminementByToken::setZipCode()
     * @uses FindRDVPointRetraitAcheminementByToken::setCity()
     * @uses FindRDVPointRetraitAcheminementByToken::setCountryCode()
     * @uses FindRDVPointRetraitAcheminementByToken::setWeight()
     * @uses FindRDVPointRetraitAcheminementByToken::setShippingDate()
     * @uses FindRDVPointRetraitAcheminementByToken::setFilterRelay()
     * @uses FindRDVPointRetraitAcheminementByToken::setRequestId()
     * @uses FindRDVPointRetraitAcheminementByToken::setLang()
     * @uses FindRDVPointRetraitAcheminementByToken::setOptionInter()
     * @param string $token
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
    public function __construct($token = null, $address = null, $zipCode = null, $city = null, $countryCode = null, $weight = null, $shippingDate = null, $filterRelay = null, $requestId = null, $lang = null, $optionInter = null)
    {
        $this
            ->setToken($token)
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
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setFilterRelay($filterRelay = null)
    {
        // validation for constraint: string
        if (!is_null($filterRelay) && !is_string($filterRelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterRelay, true), gettype($filterRelay)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken
     */
    public function setOptionInter($optionInter = null)
    {
        // validation for constraint: string
        if (!is_null($optionInter) && !is_string($optionInter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionInter, true), gettype($optionInter)), __LINE__);
        }
        $this->optionInter = $optionInter;
        return $this;
    }
}
