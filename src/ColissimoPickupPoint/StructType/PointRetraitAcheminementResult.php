<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointRetraitAcheminementResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointRetraitAcheminementResult extends AbstractStructBase
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
     * The listePointRetraitAcheminement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPickupPoint\StructType\PointRetraitAcheminement[]
     */
    protected ?array $listePointRetraitAcheminement = null;
    /**
     * The qualiteReponse
     * @var int|null
     */
    protected ?int $qualiteReponse = null;
    /**
     * The wsRequestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wsRequestId = null;
    /**
     * Constructor method for pointRetraitAcheminementResult
     * @uses PointRetraitAcheminementResult::setErrorCode()
     * @uses PointRetraitAcheminementResult::setErrorMessage()
     * @uses PointRetraitAcheminementResult::setListePointRetraitAcheminement()
     * @uses PointRetraitAcheminementResult::setQualiteReponse()
     * @uses PointRetraitAcheminementResult::setWsRequestId()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement[] $listePointRetraitAcheminement
     * @param int $qualiteReponse
     * @param string $wsRequestId
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $listePointRetraitAcheminement = null, ?int $qualiteReponse = null, ?string $wsRequestId = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListePointRetraitAcheminement($listePointRetraitAcheminement)
            ->setQualiteReponse($qualiteReponse)
            ->setWsRequestId($wsRequestId);
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
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
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
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
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
     * Get listePointRetraitAcheminement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement[]
     */
    public function getListePointRetraitAcheminement(): ?array
    {
        return isset($this->listePointRetraitAcheminement) ? $this->listePointRetraitAcheminement : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListePointRetraitAcheminement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListePointRetraitAcheminement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListePointRetraitAcheminementForArrayConstraintsFromSetListePointRetraitAcheminement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pointRetraitAcheminementResultListePointRetraitAcheminementItem) {
            // validation for constraint: itemType
            if (!$pointRetraitAcheminementResultListePointRetraitAcheminementItem instanceof \ColissimoPickupPoint\StructType\PointRetraitAcheminement) {
                $invalidValues[] = is_object($pointRetraitAcheminementResultListePointRetraitAcheminementItem) ? get_class($pointRetraitAcheminementResultListePointRetraitAcheminementItem) : sprintf('%s(%s)', gettype($pointRetraitAcheminementResultListePointRetraitAcheminementItem), var_export($pointRetraitAcheminementResultListePointRetraitAcheminementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listePointRetraitAcheminement property can only contain items of type \ColissimoPickupPoint\StructType\PointRetraitAcheminement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listePointRetraitAcheminement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement[] $listePointRetraitAcheminement
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setListePointRetraitAcheminement(?array $listePointRetraitAcheminement = null): self
    {
        // validation for constraint: array
        if ('' !== ($listePointRetraitAcheminementArrayErrorMessage = self::validateListePointRetraitAcheminementForArrayConstraintsFromSetListePointRetraitAcheminement($listePointRetraitAcheminement))) {
            throw new InvalidArgumentException($listePointRetraitAcheminementArrayErrorMessage, __LINE__);
        }
        if (is_null($listePointRetraitAcheminement) || (is_array($listePointRetraitAcheminement) && empty($listePointRetraitAcheminement))) {
            unset($this->listePointRetraitAcheminement);
        } else {
            $this->listePointRetraitAcheminement = $listePointRetraitAcheminement;
        }
        
        return $this;
    }
    /**
     * Add item to listePointRetraitAcheminement value
     * @throws InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement $item
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function addToListePointRetraitAcheminement(\ColissimoPickupPoint\StructType\PointRetraitAcheminement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPickupPoint\StructType\PointRetraitAcheminement) {
            throw new InvalidArgumentException(sprintf('The listePointRetraitAcheminement property can only contain items of type \ColissimoPickupPoint\StructType\PointRetraitAcheminement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listePointRetraitAcheminement[] = $item;
        
        return $this;
    }
    /**
     * Get qualiteReponse value
     * @return int|null
     */
    public function getQualiteReponse(): ?int
    {
        return $this->qualiteReponse;
    }
    /**
     * Set qualiteReponse value
     * @param int $qualiteReponse
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setQualiteReponse(?int $qualiteReponse = null): self
    {
        // validation for constraint: int
        if (!is_null($qualiteReponse) && !(is_int($qualiteReponse) || ctype_digit($qualiteReponse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualiteReponse, true), gettype($qualiteReponse)), __LINE__);
        }
        $this->qualiteReponse = $qualiteReponse;
        
        return $this;
    }
    /**
     * Get wsRequestId value
     * @return string|null
     */
    public function getWsRequestId(): ?string
    {
        return $this->wsRequestId;
    }
    /**
     * Set wsRequestId value
     * @param string $wsRequestId
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setWsRequestId(?string $wsRequestId = null): self
    {
        // validation for constraint: string
        if (!is_null($wsRequestId) && !is_string($wsRequestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsRequestId, true), gettype($wsRequestId)), __LINE__);
        }
        $this->wsRequestId = $wsRequestId;
        
        return $this;
    }
}
