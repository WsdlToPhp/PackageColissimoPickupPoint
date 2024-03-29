<?php

declare(strict_types=1);

namespace SoapClient;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class can be overridden at your will.
 * Its only purpose is to show you how you can use your own SoapClient client.
 * As you can see, you must at least override the getSoapClientClassName in order to return
 * your own SoapClient class name to be used.
 *
 * Full information can be found at PackageBase project homepage: https://github.com/WsdlToPhp/PackageBase.
 */
class SoapClientBase extends AbstractSoapClientBase
{
    /**
     * @var string
     */
    const DEFAULT_SOAP_CLIENT_CLASS = SoapClient::class;

    /**
     * @param string|null $soapClientClassName
     * @return string
     * @see \WsdlToPhp\PackageBase\AbstractSoapClientBase::getSoapClientClassName()
     */
    public function getSoapClientClassName(?string $soapClientClassName = null): string
    {
        return parent::getSoapClientClassName(static::DEFAULT_SOAP_CLIENT_CLASS);
    }
}
