<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ColissimoPickupPoint\ClassMap::get(),
];
/**
 * Samples for Find ServiceType
 */
$find = new \ColissimoPickupPoint\ServiceType\Find($options);
/**
 * Sample call for findRDVPointRetraitAcheminement operation/method
 */
if ($find->findRDVPointRetraitAcheminement(new \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findRDVPointRetraitAcheminementByToken operation/method
 */
if ($find->findRDVPointRetraitAcheminementByToken(new \ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementByToken()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findPointRetraitAcheminementByID operation/method
 */
if ($find->findPointRetraitAcheminementByID(new \ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
