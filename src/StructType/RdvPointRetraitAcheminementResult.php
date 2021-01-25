<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rdvPointRetraitAcheminementResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RdvPointRetraitAcheminementResult extends PointRetraitAcheminementResult
{
    /**
     * The rdv
     * @var bool
     */
    public $rdv;
    /**
     * Constructor method for rdvPointRetraitAcheminementResult
     * @uses RdvPointRetraitAcheminementResult::setRdv()
     * @param bool $rdv
     */
    public function __construct($rdv = null)
    {
        $this
            ->setRdv($rdv);
    }
    /**
     * Get rdv value
     * @return bool|null
     */
    public function getRdv()
    {
        return $this->rdv;
    }
    /**
     * Set rdv value
     * @param bool $rdv
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
     */
    public function setRdv($rdv = null)
    {
        // validation for constraint: boolean
        if (!is_null($rdv) && !is_bool($rdv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rdv, true), gettype($rdv)), __LINE__);
        }
        $this->rdv = $rdv;
        return $this;
    }
}
