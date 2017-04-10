<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rdvPointRetraitAcheminementByIDResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RdvPointRetraitAcheminementByIDResult extends PointRetraitAcheminementByIDResult
{
    /**
     * The rdv
     * @var bool
     */
    public $rdv;
    /**
     * Constructor method for rdvPointRetraitAcheminementByIDResult
     * @uses RdvPointRetraitAcheminementByIDResult::setRdv()
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
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult
     */
    public function setRdv($rdv = null)
    {
        // validation for constraint: boolean
        if (!is_null($rdv) && !is_bool($rdv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rdv)), __LINE__);
        }
        $this->rdv = $rdv;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult
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
