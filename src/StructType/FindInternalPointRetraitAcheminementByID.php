<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findInternalPointRetraitAcheminementByID StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findInternalPointRetraitAcheminementByID
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindInternalPointRetraitAcheminementByID extends AbstractStructBase
{
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
     * Constructor method for findInternalPointRetraitAcheminementByID
     * @uses FindInternalPointRetraitAcheminementByID::setId()
     * @uses FindInternalPointRetraitAcheminementByID::setReseau()
     * @uses FindInternalPointRetraitAcheminementByID::setLangue()
     * @param string $id
     * @param string $reseau
     * @param string $langue
     */
    public function __construct($id = null, $reseau = null, $langue = null)
    {
        $this
            ->setId($id)
            ->setReseau($reseau)
            ->setLangue($langue);
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
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID
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
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID
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
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID
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
