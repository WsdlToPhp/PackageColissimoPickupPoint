<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $calendarDeDebut;
    /**
     * The calendarDeFin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $calendarDeFin;
    /**
     * The numero
     * @var int
     */
    public $numero;
    /**
     * Constructor method for Conges
     * @uses Conges::setCalendarDeDebut()
     * @uses Conges::setCalendarDeFin()
     * @uses Conges::setNumero()
     * @param string $calendarDeDebut
     * @param string $calendarDeFin
     * @param int $numero
     */
    public function __construct($calendarDeDebut = null, $calendarDeFin = null, $numero = null)
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
    public function getCalendarDeDebut()
    {
        return $this->calendarDeDebut;
    }
    /**
     * Set calendarDeDebut value
     * @param string $calendarDeDebut
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setCalendarDeDebut($calendarDeDebut = null)
    {
        // validation for constraint: string
        if (!is_null($calendarDeDebut) && !is_string($calendarDeDebut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarDeDebut, true), gettype($calendarDeDebut)), __LINE__);
        }
        $this->calendarDeDebut = $calendarDeDebut;
        return $this;
    }
    /**
     * Get calendarDeFin value
     * @return string|null
     */
    public function getCalendarDeFin()
    {
        return $this->calendarDeFin;
    }
    /**
     * Set calendarDeFin value
     * @param string $calendarDeFin
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setCalendarDeFin($calendarDeFin = null)
    {
        // validation for constraint: string
        if (!is_null($calendarDeFin) && !is_string($calendarDeFin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarDeFin, true), gettype($calendarDeFin)), __LINE__);
        }
        $this->calendarDeFin = $calendarDeFin;
        return $this;
    }
    /**
     * Get numero value
     * @return int|null
     */
    public function getNumero()
    {
        return $this->numero;
    }
    /**
     * Set numero value
     * @param int $numero
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public function setNumero($numero = null)
    {
        // validation for constraint: int
        if (!is_null($numero) && !(is_int($numero) || ctype_digit($numero))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        $this->numero = $numero;
        return $this;
    }
}
