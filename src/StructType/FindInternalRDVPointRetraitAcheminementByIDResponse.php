<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findInternalRDVPointRetraitAcheminementByIDResponse
 * StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findInternalRDVPointRetraitAcheminementByIDResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindInternalRDVPointRetraitAcheminementByIDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult
     */
    public $return;
    /**
     * Constructor method for findInternalRDVPointRetraitAcheminementByIDResponse
     * @uses FindInternalRDVPointRetraitAcheminementByIDResponse::setReturn()
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult $return
     */
    public function __construct(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult $return
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByIDResponse
     */
    public function setReturn(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult $return = null)
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
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByIDResponse
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
