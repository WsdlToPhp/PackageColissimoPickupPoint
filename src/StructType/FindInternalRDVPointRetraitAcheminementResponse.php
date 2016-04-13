<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findInternalRDVPointRetraitAcheminementResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findInternalRDVPointRetraitAcheminementResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindInternalRDVPointRetraitAcheminementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
     */
    public $return;
    /**
     * Constructor method for findInternalRDVPointRetraitAcheminementResponse
     * @uses FindInternalRDVPointRetraitAcheminementResponse::setReturn()
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return
     */
    public function __construct(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementResponse
     */
    public function setReturn(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementResponse
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
