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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $distributionSort;
    /**
     * The lotAcheminement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lotAcheminement;
    /**
     * The versionPlanTri
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributionSort, true), gettype($distributionSort)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lotAcheminement, true), gettype($lotAcheminement)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versionPlanTri, true), gettype($versionPlanTri)), __LINE__);
        }
        $this->versionPlanTri = $versionPlanTri;
        return $this;
    }
}
