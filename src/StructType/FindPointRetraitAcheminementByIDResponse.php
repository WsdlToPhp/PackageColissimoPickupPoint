<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPointRetraitAcheminementByIDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findPointRetraitAcheminementByIDResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindPointRetraitAcheminementByIDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
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
}
