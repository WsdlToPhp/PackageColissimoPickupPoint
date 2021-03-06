<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findRDVPointRetraitAcheminementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findRDVPointRetraitAcheminementResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindRDVPointRetraitAcheminementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
     */
    public $return;
    /**
     * Constructor method for findRDVPointRetraitAcheminementResponse
     * @uses FindRDVPointRetraitAcheminementResponse::setReturn()
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse
     */
    public function setReturn(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
