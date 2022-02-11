<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $distributionSort = null;
    /**
     * The lotAcheminement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $lotAcheminement = null;
    /**
     * The versionPlanTri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $versionPlanTri = null;
    /**
     * Constructor method for pointRetraitAcheminement
     * @uses PointRetraitAcheminement::setDistributionSort()
     * @uses PointRetraitAcheminement::setLotAcheminement()
     * @uses PointRetraitAcheminement::setVersionPlanTri()
     * @param string $distributionSort
     * @param string $lotAcheminement
     * @param string $versionPlanTri
     */
    public function __construct(?string $distributionSort = null, ?string $lotAcheminement = null, ?string $versionPlanTri = null)
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
    public function getDistributionSort(): ?string
    {
        return $this->distributionSort;
    }
    /**
     * Set distributionSort value
     * @param string $distributionSort
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setDistributionSort(?string $distributionSort = null): self
    {
        // validation for constraint: string
        if (!is_null($distributionSort) && !is_string($distributionSort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributionSort, true), gettype($distributionSort)), __LINE__);
        }
        $this->distributionSort = $distributionSort;
        
        return $this;
    }
    /**
     * Get lotAcheminement value
     * @return string|null
     */
    public function getLotAcheminement(): ?string
    {
        return $this->lotAcheminement;
    }
    /**
     * Set lotAcheminement value
     * @param string $lotAcheminement
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setLotAcheminement(?string $lotAcheminement = null): self
    {
        // validation for constraint: string
        if (!is_null($lotAcheminement) && !is_string($lotAcheminement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lotAcheminement, true), gettype($lotAcheminement)), __LINE__);
        }
        $this->lotAcheminement = $lotAcheminement;
        
        return $this;
    }
    /**
     * Get versionPlanTri value
     * @return string|null
     */
    public function getVersionPlanTri(): ?string
    {
        return $this->versionPlanTri;
    }
    /**
     * Set versionPlanTri value
     * @param string $versionPlanTri
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement
     */
    public function setVersionPlanTri(?string $versionPlanTri = null): self
    {
        // validation for constraint: string
        if (!is_null($versionPlanTri) && !is_string($versionPlanTri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versionPlanTri, true), gettype($versionPlanTri)), __LINE__);
        }
        $this->versionPlanTri = $versionPlanTri;
        
        return $this;
    }
}
