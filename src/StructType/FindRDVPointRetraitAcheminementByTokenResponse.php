<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findRDVPointRetraitAcheminementByTokenResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:findRDVPointRetraitAcheminementByTokenResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FindRDVPointRetraitAcheminementByTokenResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
     */
    public $return;
    /**
     * Constructor method for findRDVPointRetraitAcheminementByTokenResponse
     * @uses FindRDVPointRetraitAcheminementByTokenResponse::setReturn()
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
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByTokenResponse
     */
    public function setReturn(\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
