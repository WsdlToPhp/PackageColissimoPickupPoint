<?php

declare(strict_types=1);

namespace ColissimoPickupPoint\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Conges StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Conges extends AbstractStructBase
{
    /**
     * The calendarDeDebut
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $calendarDeDebut = null;
    /**
     * The calendarDeFin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $calendarDeFin = null;
    /**
     * The numero
     * @var int|null
     */
    protected ?int $numero = null;
    /**
     * Constructor method for Conges
     * @uses Conges::setCalendarDeDebut()
     * @uses Conges::setCalendarDeFin()
     * @uses Conges::setNumero()
     * @param string $calendarDeDebut
     * @param string $calendarDeFin
     * @param int $numero
     */
    public function __construct(?string $calendarDeDebut = null, ?string $calendarDeFin = null, ?int $numero = null)
    {
        $this
            ->setCalendarDeDebut($calendarDeDebut)
            ->setCalendarDeFin($calendarDeFin)
            ->setNumero($numero);
    }
    /**
     * Get calendarDeDebut value
     * @return string|null
     */
    public function getCalendarDeDebut(): ?string
    {
        return $this->calendarDeDebut;
    }
    /**
     * Set calendarDeDebut value
     * @param string $calendarDeDebut
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setCalendarDeDebut(?string $calendarDeDebut = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarDeDebut) && !is_string($calendarDeDebut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarDeDebut, true), gettype($calendarDeDebut)), __LINE__);
        }
        $this->calendarDeDebut = $calendarDeDebut;
        
        return $this;
    }
    /**
     * Get calendarDeFin value
     * @return string|null
     */
    public function getCalendarDeFin(): ?string
    {
        return $this->calendarDeFin;
    }
    /**
     * Set calendarDeFin value
     * @param string $calendarDeFin
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setCalendarDeFin(?string $calendarDeFin = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarDeFin) && !is_string($calendarDeFin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarDeFin, true), gettype($calendarDeFin)), __LINE__);
        }
        $this->calendarDeFin = $calendarDeFin;
        
        return $this;
    }
    /**
     * Get numero value
     * @return int|null
     */
    public function getNumero(): ?int
    {
        return $this->numero;
    }
    /**
     * Set numero value
     * @param int $numero
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setNumero(?int $numero = null): self
    {
        // validation for constraint: int
        if (!is_null($numero) && !(is_int($numero) || ctype_digit($numero))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        $this->numero = $numero;
        
        return $this;
    }
}
