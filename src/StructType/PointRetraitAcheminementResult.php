<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointRetraitAcheminementResult StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointRetraitAcheminementResult extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The listePointRetraitAcheminement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPickupPoint\StructType\PointRetraitAcheminement[]
     */
    public $listePointRetraitAcheminement;
    /**
     * The qualiteReponse
     * @var int
     */
    public $qualiteReponse;
    /**
     * The wsRequestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $wsRequestId;
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
    public function __construct($errorCode = null, $errorMessage = null, array $listePointRetraitAcheminement = array(), $qualiteReponse = null, $wsRequestId = null)
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
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get listePointRetraitAcheminement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminement[]|null
     */
    public function getListePointRetraitAcheminement()
    {
        return isset($this->listePointRetraitAcheminement) ? $this->listePointRetraitAcheminement : null;
    }
    /**
     * Set listePointRetraitAcheminement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement[] $listePointRetraitAcheminement
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setListePointRetraitAcheminement(array $listePointRetraitAcheminement = array())
    {
        foreach ($listePointRetraitAcheminement as $pointRetraitAcheminementResultListePointRetraitAcheminementItem) {
            // validation for constraint: itemType
            if (!$pointRetraitAcheminementResultListePointRetraitAcheminementItem instanceof \ColissimoPickupPoint\StructType\PointRetraitAcheminement) {
                throw new \InvalidArgumentException(sprintf('The listePointRetraitAcheminement property can only contain items of \ColissimoPickupPoint\StructType\PointRetraitAcheminement, "%s" given', is_object($pointRetraitAcheminementResultListePointRetraitAcheminementItem) ? get_class($pointRetraitAcheminementResultListePointRetraitAcheminementItem) : gettype($pointRetraitAcheminementResultListePointRetraitAcheminementItem)), __LINE__);
            }
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
     * @throws \InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\PointRetraitAcheminement $item
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function addToListePointRetraitAcheminement(\ColissimoPickupPoint\StructType\PointRetraitAcheminement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPickupPoint\StructType\PointRetraitAcheminement) {
            throw new \InvalidArgumentException(sprintf('The listePointRetraitAcheminement property can only contain items of \ColissimoPickupPoint\StructType\PointRetraitAcheminement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->listePointRetraitAcheminement[] = $item;
        return $this;
    }
    /**
     * Get qualiteReponse value
     * @return int|null
     */
    public function getQualiteReponse()
    {
        return $this->qualiteReponse;
    }
    /**
     * Set qualiteReponse value
     * @param int $qualiteReponse
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setQualiteReponse($qualiteReponse = null)
    {
        // validation for constraint: int
        if (!is_null($qualiteReponse) && !is_numeric($qualiteReponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($qualiteReponse)), __LINE__);
        }
        $this->qualiteReponse = $qualiteReponse;
        return $this;
    }
    /**
     * Get wsRequestId value
     * @return string|null
     */
    public function getWsRequestId()
    {
        return $this->wsRequestId;
    }
    /**
     * Set wsRequestId value
     * @param string $wsRequestId
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
     */
    public function setWsRequestId($wsRequestId = null)
    {
        // validation for constraint: string
        if (!is_null($wsRequestId) && !is_string($wsRequestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wsRequestId)), __LINE__);
        }
        $this->wsRequestId = $wsRequestId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\PointRetraitAcheminementResult
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
