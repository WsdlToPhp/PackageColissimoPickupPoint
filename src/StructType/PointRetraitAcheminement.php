<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointRetraitAcheminement StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointRetraitAcheminement extends PointRetrait
{
    /**
     * The distributionSort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $distributionSort;
    /**
     * The lotAcheminement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lotAcheminement;
    /**
     * The versionPlanTri
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $versionPlanTri;
    /**
     * Constructor method for pointRetraitAcheminement
     * @uses PointRetraitAcheminement::setDistributionSort()
     * @uses PointRetraitAcheminement::setLotAcheminement()
     * @uses PointRetraitAcheminement::setVersionPlanTri()
     * @param string $distributionSort
     * @param string $lotAcheminement
     * @param string $versionPlanTri
     */
    public function __construct($distributionSort = null, $lotAcheminement = null, $versionPlanTri = null)
    {
        $this
            ->setDistributionSort($distributionSort)
            ->setLotAcheminement($lotAcheminement)
            ->setVersionPlanTri($versionPlanTri);
    }
    /**
     * Get distributionSort value
     * @return string|null
     */
    public function getDistributionSort()
    {
        return $this->distributionSort;
    }
    /**
     * Set distributionSort value
     * @param string $distributionSort
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setDistributionSort($distributionSort = null)
    {
        // validation for constraint: string
        if (!is_null($distributionSort) && !is_string($distributionSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributionSort)), __LINE__);
        }
        $this->distributionSort = $distributionSort;
        return $this;
    }
    /**
     * Get lotAcheminement value
     * @return string|null
     */
    public function getLotAcheminement()
    {
        return $this->lotAcheminement;
    }
    /**
     * Set lotAcheminement value
     * @param string $lotAcheminement
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setLotAcheminement($lotAcheminement = null)
    {
        // validation for constraint: string
        if (!is_null($lotAcheminement) && !is_string($lotAcheminement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lotAcheminement)), __LINE__);
        }
        $this->lotAcheminement = $lotAcheminement;
        return $this;
    }
    /**
     * Get versionPlanTri value
     * @return string|null
     */
    public function getVersionPlanTri()
    {
        return $this->versionPlanTri;
    }
    /**
     * Set versionPlanTri value
     * @param string $versionPlanTri
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setVersionPlanTri($versionPlanTri = null)
    {
        // validation for constraint: string
        if (!is_null($versionPlanTri) && !is_string($versionPlanTri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($versionPlanTri)), __LINE__);
        }
        $this->versionPlanTri = $versionPlanTri;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
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
