<?php

namespace ColissimoPickupPoint\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Find extends SoapClientBase
{
    /**
     * Method to call the operation originally named
     * findInternalPointRetraitAcheminementByID
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID $parameters
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByIDResponse|bool
     */
    public function findInternalPointRetraitAcheminementByID(\ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findInternalPointRetraitAcheminementByID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findRDVPointRetraitAcheminement
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement $parameters
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse|bool
     */
    public function findRDVPointRetraitAcheminement(\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findRDVPointRetraitAcheminement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * findInternalRDVPointRetraitAcheminement
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement $parameters
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementResponse|bool
     */
    public function findInternalRDVPointRetraitAcheminement(\ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findInternalRDVPointRetraitAcheminement($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * findInternalRDVPointRetraitAcheminementByID
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID $parameters
     * @return \ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByIDResponse|bool
     */
    public function findInternalRDVPointRetraitAcheminementByID(\ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findInternalRDVPointRetraitAcheminementByID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPointRetraitAcheminementByID
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID $parameters
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse|bool
     */
    public function findPointRetraitAcheminementByID(\ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->findPointRetraitAcheminementByID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByIDResponse|\ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByIDResponse|\ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementResponse|\ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse|\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
