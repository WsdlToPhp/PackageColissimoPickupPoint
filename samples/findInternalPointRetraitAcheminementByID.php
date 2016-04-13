<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/settings.inc.php';
/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use ColissimoPickupPoint\ClassMap;
use ColissimoPickupPoint\ServiceType\Find;
use ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID;

/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);
/**
 * Samples for Find ServiceType
 */
$find = new Find($options);
/**
 * Send the request
 */
$result = $find->findInternalPointRetraitAcheminementByID(new FindInternalPointRetraitAcheminementByID('097297', 'R01', 'FR'));
/**
 * Debug informations provided by the utility methods
 */
if (true) {
    echo 'XML Request: ' . $find->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $find->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $find->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $find->getLastResponseHeaders() . "\r\n";
}
/**
 * Sample call for getProductInter operation/method
 */
if ($result !== false) {
    /**
     * @var ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult
     */
    $return = $result->getReturn();
    echo PHP_EOL . sprintf('<br />ErrorCode: %s', $return->getErrorCode());
    echo PHP_EOL . sprintf('<br />ErrorMessage: %s', $return->getErrorMessage());
    if ($return->getErrorCode() <= 0) {
        $pointRetraitAcheminement = $return->getPointRetraitAcheminement();
        echo PHP_EOL . "\t\t" . sprintf('<br />Distance %dm', $pointRetraitAcheminement->getDistanceEnMetre());
        echo PHP_EOL . "\t\t" . sprintf('<br />Location %s, %s, %s, %s (%s)',
            $pointRetraitAcheminement->getNom(),
            $pointRetraitAcheminement->getAdresse1(),
            $pointRetraitAcheminement->getLocalite(),
            $pointRetraitAcheminement->getLibellePays(),
            $pointRetraitAcheminement->getIndiceDeLocalisation());
        echo PHP_EOL . "\t\t" . sprintf("<br />Open hours \r\n\t\t\t<br />Monday: %s, \r\n\t\t\t<br />Tuesday: %s, \r\n\t\t\t<br />Wednesday: %s, \r\n\t\t\t<br />Thursday: %s \r\n\t\t\t<br />Friday: %s, \r\n\t\t\t<br />Saturday: %s, \r\n\t\t\t<br />Sunday: %s",
            $pointRetraitAcheminement->getHorairesOuvertureLundi(),
            $pointRetraitAcheminement->getHorairesOuvertureMardi(),
            $pointRetraitAcheminement->getHorairesOuvertureMercredi(),
            $pointRetraitAcheminement->getHorairesOuvertureJeudi(),
            $pointRetraitAcheminement->getHorairesOuvertureVendredi(),
            $pointRetraitAcheminement->getHorairesOuvertureSamedi(),
            $pointRetraitAcheminement->getHorairesOuvertureDimanche());
    }
} else {
    echo PHP_EOL . 'An error occurred: ' . $find->getLastErrorForMethod('ColissimoPickupPoint\ServiceType\Find::findInternalPointRetraitAcheminementByID')->getMessage() . PHP_EOL;
}
