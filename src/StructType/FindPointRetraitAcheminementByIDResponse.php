<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPointRetraitAcheminementByIDResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findPointRetraitAcheminementByIDResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindPointRetraitAcheminementByIDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult
     */
    public $return;
    /**
     * Constructor method for findPointRetraitAcheminementByIDResponse
     * @uses FindPointRetraitAcheminementByIDResponse::setReturn()
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult $return
     */
    public function __construct(\ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult $return
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse
     */
    public function setReturn(\ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult $return = null)
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
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse
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
