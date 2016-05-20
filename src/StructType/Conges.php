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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $calendarDeDebut;
    /**
     * The calendarDeFin
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calendarDeDebut)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calendarDeFin)), __LINE__);
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
        if (!is_null($numero) && !is_numeric($numero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numero)), __LINE__);
        }
        $this->numero = $numero;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\Conges
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
