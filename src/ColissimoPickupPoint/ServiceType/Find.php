<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\ServiceType;

use SoapFault;
use SoapClient\SoapClientBase;

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
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement $parameters
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse|bool
     */
    public function findRDVPointRetraitAcheminement(\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement $parameters)
    {
        try {
            $this->setResult($resultFindRDVPointRetraitAcheminement = $this->getSoapClient()->__soapCall('findRDVPointRetraitAcheminement', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindRDVPointRetraitAcheminement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * findRDVPointRetraitAcheminementByToken
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken $parameters
     * @return \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByTokenResponse|bool
     */
    public function findRDVPointRetraitAcheminementByToken(\ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken $parameters)
    {
        try {
            $this->setResult($resultFindRDVPointRetraitAcheminementByToken = $this->getSoapClient()->__soapCall('findRDVPointRetraitAcheminementByToken', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindRDVPointRetraitAcheminementByToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findPointRetraitAcheminementByID
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID $parameters
     * @return \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse|bool
     */
    public function findPointRetraitAcheminementByID(\ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID $parameters)
    {
        try {
            $this->setResult($resultFindPointRetraitAcheminementByID = $this->getSoapClient()->__soapCall('findPointRetraitAcheminementByID', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFindPointRetraitAcheminementByID;
        } catch (SoapFault $soapFault) {
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
