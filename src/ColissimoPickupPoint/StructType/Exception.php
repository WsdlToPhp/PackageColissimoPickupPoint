<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for Exception
     * @uses Exception::setMessage()
     * @param string $message
     */
    public function __construct(?string $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \ColissimoPickupPoint\StructType\Exception
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
