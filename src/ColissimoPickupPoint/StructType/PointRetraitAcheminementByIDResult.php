<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointRetraitAcheminementByIDResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointRetraitAcheminementByIDResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int|null
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The pointRetraitAcheminement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPickupPoint\StructType\PointRetraitAcheminement|null
     */
    protected ?\ColissimoPickupPoint\StructType\PointRetraitAcheminement $pointRetraitAcheminement = null;
    /**
     * Constructor method for pointRetraitAcheminementByIDResult
     * @uses PointRetraitAcheminementByIDResult::setErrorCode()
     * @uses PointRetraitAcheminementByIDResult::setErrorMessage()
     * @uses PointRetraitAcheminementByIDResult::setPointRetraitAcheminement()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement $pointRetraitAcheminement
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?\ColissimoPickupPoint\StructType\PointRetraitAcheminement $pointRetraitAcheminement = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPointRetraitAcheminement($pointRetraitAcheminement);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get pointRetraitAcheminement value
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement|null
     */
    public function getPointRetraitAcheminement(): ?\ColissimoPickupPoint\StructType\PointRetraitAcheminement
    {
        return $this->pointRetraitAcheminement;
    }
    /**
     * Set pointRetraitAcheminement value
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement $pointRetraitAcheminement
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult
     */
    public function setPointRetraitAcheminement(?\ColissimoPickupPoint\StructType\PointRetraitAcheminement $pointRetraitAcheminement = null): self
    {
        $this->pointRetraitAcheminement = $pointRetraitAcheminement;
        
        return $this;
    }
}
