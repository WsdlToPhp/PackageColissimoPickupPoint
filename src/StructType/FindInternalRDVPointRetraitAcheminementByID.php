<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findInternalRDVPointRetraitAcheminementByID StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findInternalRDVPointRetraitAcheminementByID
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindInternalRDVPointRetraitAcheminementByID extends AbstractStructBase
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
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $id;
    /**
     * The reseau
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reseau;
    /**
     * The langue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $langue;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The filterRelay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $filterRelay;
    /**
     * Constructor method for findInternalRDVPointRetraitAcheminementByID
     * @uses FindInternalRDVPointRetraitAcheminementByID::setAccountNumber()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setPassword()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setId()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setReseau()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setLangue()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setDate()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setWeight()
     * @uses FindInternalRDVPointRetraitAcheminementByID::setFilterRelay()
     * @param string $accountNumber
     * @param string $password
     * @param string $id
     * @param string $reseau
     * @param string $langue
     * @param string $date
     * @param string $weight
     * @param string $filterRelay
     */
    public function __construct($accountNumber = null, $password = null, $id = null, $reseau = null, $langue = null, $date = null, $weight = null, $filterRelay = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setId($id)
            ->setReseau($reseau)
            ->setLangue($langue)
            ->setDate($date)
            ->setWeight($weight)
            ->setFilterRelay($filterRelay);
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
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
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
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get reseau value
     * @return string|null
     */
    public function getReseau()
    {
        return $this->reseau;
    }
    /**
     * Set reseau value
     * @param string $reseau
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
     */
    public function setReseau($reseau = null)
    {
        // validation for constraint: string
        if (!is_null($reseau) && !is_string($reseau)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reseau)), __LINE__);
        }
        $this->reseau = $reseau;
        return $this;
    }
    /**
     * Get langue value
     * @return string|null
     */
    public function getLangue()
    {
        return $this->langue;
    }
    /**
     * Set langue value
     * @param string $langue
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
     */
    public function setLangue($langue = null)
    {
        // validation for constraint: string
        if (!is_null($langue) && !is_string($langue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($langue)), __LINE__);
        }
        $this->langue = $langue;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
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
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
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
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID
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
