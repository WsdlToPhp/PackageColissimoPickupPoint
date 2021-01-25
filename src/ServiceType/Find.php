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
            $this->setResult($this->getSoapClient()->__soapCall('findRDVPointRetraitAcheminement', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * findRDVPointRetraitAcheminementByToken
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken $parameters
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByTokenResponse|bool
     */
    public function findRDVPointRetraitAcheminementByToken(\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('findRDVPointRetraitAcheminementByToken', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('findPointRetraitAcheminementByID', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse|\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByTokenResponse|\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
