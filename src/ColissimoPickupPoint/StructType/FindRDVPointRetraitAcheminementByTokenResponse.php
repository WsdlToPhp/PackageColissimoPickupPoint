<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult|null
     */
    protected ?\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null;
    /**
     * Constructor method for findRDVPointRetraitAcheminementByTokenResponse
     * @uses FindRDVPointRetraitAcheminementByTokenResponse::setReturn()
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return
     */
    public function __construct(?\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult|null
     */
    public function getReturn(): ?\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByTokenResponse
     */
    public function setReturn(?\ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
