<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $accountNumber;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The apikey
     * Meta information extracted from the WSDL
     * - default:
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $apikey;
    /**
     * The codTiersPourPartenaire
     * Meta information extracted from the WSDL
     * - default:
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $codTiersPourPartenaire;
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
    public function __construct($accountNumber = null, $password = null, $apikey = '', $codTiersPourPartenaire = '', $address = null, $zipCode = null, $city = null, $countryCode = null, $weight = null, $shippingDate = null, $filterRelay = null, $requestId = null, $lang = null, $optionInter = null)
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
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
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
    public function getApikey()
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
    public function setApikey($apikey = '')
    {
        // validation for constraint: string
        if (!is_null($apikey) && !is_string($apikey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apikey, true), gettype($apikey)), __LINE__);
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
    public function getCodTiersPourPartenaire()
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
    public function setCodTiersPourPartenaire($codTiersPourPartenaire = '')
    {
        // validation for constraint: string
        if (!is_null($codTiersPourPartenaire) && !is_string($codTiersPourPartenaire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codTiersPourPartenaire, true), gettype($codTiersPourPartenaire)), __LINE__);
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
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement
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
