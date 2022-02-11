<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rdvPointRetraitAcheminementResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RdvPointRetraitAcheminementResult extends PointRetraitAcheminementResult
{
    /**
     * The rdv
     * @var bool|null
     */
    protected ?bool $rdv = null;
    /**
     * Constructor method for rdvPointRetraitAcheminementResult
     * @uses RdvPointRetraitAcheminementResult::setRdv()
     * @param bool $rdv
     */
    public function __construct(?bool $rdv = null)
    {
        $this
            ->setRdv($rdv);
    }
    /**
     * Get rdv value
     * @return bool|null
     */
    public function getRdv(): ?bool
    {
        return $this->rdv;
    }
    /**
     * Set rdv value
     * @param bool $rdv
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult
     */
    public function setRdv(?bool $rdv = null): self
    {
        // validation for constraint: boolean
        if (!is_null($rdv) && !is_bool($rdv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rdv, true), gettype($rdv)), __LINE__);
        }
        $this->rdv = $rdv;
        
        return $this;
    }
}
