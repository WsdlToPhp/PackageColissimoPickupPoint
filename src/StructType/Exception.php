<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Exception StructType
 * Meta information extracted from the WSDL
 * - type: tns:Exception
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Exception extends AbstractStructBase
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $message;
    /**
     * Constructor method for Exception
     * @uses Exception::setMessage()
     * @param string $message
     */
    public function __construct($message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \ColissimoPickupPoint\StructType\Exception
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
}
