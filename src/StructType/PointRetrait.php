<?php

namespace ColissimoPickupPoint\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PointRetrait StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PointRetrait extends AbstractStructBase
{
    /**
     * The codePays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePays;
    /**
     * The langue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $langue;
    /**
     * The libellePays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $libellePays;
    /**
     * The loanOfHandlingTool
     * @var bool
     */
    public $loanOfHandlingTool;
    /**
     * The parking
     * @var bool
     */
    public $parking;
    /**
     * The reseau
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reseau;
    /**
     * The accesPersonneMobiliteReduite
     * @var bool
     */
    public $accesPersonneMobiliteReduite;
    /**
     * The adresse1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse1;
    /**
     * The adresse2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse2;
    /**
     * The adresse3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse3;
    /**
     * The codePostal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePostal;
    /**
     * The congesPartiel
     * @var bool
     */
    public $congesPartiel;
    /**
     * The congesTotal
     * @var bool
     */
    public $congesTotal;
    /**
     * The coordGeolocalisationLatitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coordGeolocalisationLatitude;
    /**
     * The coordGeolocalisationLongitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $coordGeolocalisationLongitude;
    /**
     * The distanceEnMetre
     * @var int
     */
    public $distanceEnMetre;
    /**
     * The horairesOuvertureDimanche
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureDimanche;
    /**
     * The horairesOuvertureJeudi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureJeudi;
    /**
     * The horairesOuvertureLundi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureLundi;
    /**
     * The horairesOuvertureMardi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureMardi;
    /**
     * The horairesOuvertureMercredi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureMercredi;
    /**
     * The horairesOuvertureSamedi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureSamedi;
    /**
     * The horairesOuvertureVendredi
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $horairesOuvertureVendredi;
    /**
     * The identifiant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identifiant;
    /**
     * The indiceDeLocalisation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $indiceDeLocalisation;
    /**
     * The listeConges
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPickupPoint\StructType\Conges[]
     */
    public $listeConges;
    /**
     * The localite
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $localite;
    /**
     * The nom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nom;
    /**
     * The periodeActiviteHoraireDeb
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $periodeActiviteHoraireDeb;
    /**
     * The periodeActiviteHoraireFin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $periodeActiviteHoraireFin;
    /**
     * The poidsMaxi
     * @var int
     */
    public $poidsMaxi;
    /**
     * The typeDePoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $typeDePoint;
    /**
     * Constructor method for PointRetrait
     * @uses PointRetrait::setCodePays()
     * @uses PointRetrait::setLangue()
     * @uses PointRetrait::setLibellePays()
     * @uses PointRetrait::setLoanOfHandlingTool()
     * @uses PointRetrait::setParking()
     * @uses PointRetrait::setReseau()
     * @uses PointRetrait::setAccesPersonneMobiliteReduite()
     * @uses PointRetrait::setAdresse1()
     * @uses PointRetrait::setAdresse2()
     * @uses PointRetrait::setAdresse3()
     * @uses PointRetrait::setCodePostal()
     * @uses PointRetrait::setCongesPartiel()
     * @uses PointRetrait::setCongesTotal()
     * @uses PointRetrait::setCoordGeolocalisationLatitude()
     * @uses PointRetrait::setCoordGeolocalisationLongitude()
     * @uses PointRetrait::setDistanceEnMetre()
     * @uses PointRetrait::setHorairesOuvertureDimanche()
     * @uses PointRetrait::setHorairesOuvertureJeudi()
     * @uses PointRetrait::setHorairesOuvertureLundi()
     * @uses PointRetrait::setHorairesOuvertureMardi()
     * @uses PointRetrait::setHorairesOuvertureMercredi()
     * @uses PointRetrait::setHorairesOuvertureSamedi()
     * @uses PointRetrait::setHorairesOuvertureVendredi()
     * @uses PointRetrait::setIdentifiant()
     * @uses PointRetrait::setIndiceDeLocalisation()
     * @uses PointRetrait::setListeConges()
     * @uses PointRetrait::setLocalite()
     * @uses PointRetrait::setNom()
     * @uses PointRetrait::setPeriodeActiviteHoraireDeb()
     * @uses PointRetrait::setPeriodeActiviteHoraireFin()
     * @uses PointRetrait::setPoidsMaxi()
     * @uses PointRetrait::setTypeDePoint()
     * @param string $codePays
     * @param string $langue
     * @param string $libellePays
     * @param bool $loanOfHandlingTool
     * @param bool $parking
     * @param string $reseau
     * @param bool $accesPersonneMobiliteReduite
     * @param string $adresse1
     * @param string $adresse2
     * @param string $adresse3
     * @param string $codePostal
     * @param bool $congesPartiel
     * @param bool $congesTotal
     * @param string $coordGeolocalisationLatitude
     * @param string $coordGeolocalisationLongitude
     * @param int $distanceEnMetre
     * @param string $horairesOuvertureDimanche
     * @param string $horairesOuvertureJeudi
     * @param string $horairesOuvertureLundi
     * @param string $horairesOuvertureMardi
     * @param string $horairesOuvertureMercredi
     * @param string $horairesOuvertureSamedi
     * @param string $horairesOuvertureVendredi
     * @param string $identifiant
     * @param string $indiceDeLocalisation
     * @param \ColissimoPickupPoint\StructType\Conges[] $listeConges
     * @param string $localite
     * @param string $nom
     * @param string $periodeActiviteHoraireDeb
     * @param string $periodeActiviteHoraireFin
     * @param int $poidsMaxi
     * @param string $typeDePoint
     */
    public function __construct($codePays = null, $langue = null, $libellePays = null, $loanOfHandlingTool = null, $parking = null, $reseau = null, $accesPersonneMobiliteReduite = null, $adresse1 = null, $adresse2 = null, $adresse3 = null, $codePostal = null, $congesPartiel = null, $congesTotal = null, $coordGeolocalisationLatitude = null, $coordGeolocalisationLongitude = null, $distanceEnMetre = null, $horairesOuvertureDimanche = null, $horairesOuvertureJeudi = null, $horairesOuvertureLundi = null, $horairesOuvertureMardi = null, $horairesOuvertureMercredi = null, $horairesOuvertureSamedi = null, $horairesOuvertureVendredi = null, $identifiant = null, $indiceDeLocalisation = null, array $listeConges = array(), $localite = null, $nom = null, $periodeActiviteHoraireDeb = null, $periodeActiviteHoraireFin = null, $poidsMaxi = null, $typeDePoint = null)
    {
        $this
            ->setCodePays($codePays)
            ->setLangue($langue)
            ->setLibellePays($libellePays)
            ->setLoanOfHandlingTool($loanOfHandlingTool)
            ->setParking($parking)
            ->setReseau($reseau)
            ->setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite)
            ->setAdresse1($adresse1)
            ->setAdresse2($adresse2)
            ->setAdresse3($adresse3)
            ->setCodePostal($codePostal)
            ->setCongesPartiel($congesPartiel)
            ->setCongesTotal($congesTotal)
            ->setCoordGeolocalisationLatitude($coordGeolocalisationLatitude)
            ->setCoordGeolocalisationLongitude($coordGeolocalisationLongitude)
            ->setDistanceEnMetre($distanceEnMetre)
            ->setHorairesOuvertureDimanche($horairesOuvertureDimanche)
            ->setHorairesOuvertureJeudi($horairesOuvertureJeudi)
            ->setHorairesOuvertureLundi($horairesOuvertureLundi)
            ->setHorairesOuvertureMardi($horairesOuvertureMardi)
            ->setHorairesOuvertureMercredi($horairesOuvertureMercredi)
            ->setHorairesOuvertureSamedi($horairesOuvertureSamedi)
            ->setHorairesOuvertureVendredi($horairesOuvertureVendredi)
            ->setIdentifiant($identifiant)
            ->setIndiceDeLocalisation($indiceDeLocalisation)
            ->setListeConges($listeConges)
            ->setLocalite($localite)
            ->setNom($nom)
            ->setPeriodeActiviteHoraireDeb($periodeActiviteHoraireDeb)
            ->setPeriodeActiviteHoraireFin($periodeActiviteHoraireFin)
            ->setPoidsMaxi($poidsMaxi)
            ->setTypeDePoint($typeDePoint);
    }
    /**
     * Get codePays value
     * @return string|null
     */
    public function getCodePays()
    {
        return $this->codePays;
    }
    /**
     * Set codePays value
     * @param string $codePays
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCodePays($codePays = null)
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;
        return $this;
    }
    /**
     * Get langue value
     * @return string|null
     */
    public function getLangue()
    {
        return $this->langue;
    }
    /**
     * Set langue value
     * @param string $langue
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setLangue($langue = null)
    {
        // validation for constraint: string
        if (!is_null($langue) && !is_string($langue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($langue)), __LINE__);
        }
        $this->langue = $langue;
        return $this;
    }
    /**
     * Get libellePays value
     * @return string|null
     */
    public function getLibellePays()
    {
        return $this->libellePays;
    }
    /**
     * Set libellePays value
     * @param string $libellePays
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setLibellePays($libellePays = null)
    {
        // validation for constraint: string
        if (!is_null($libellePays) && !is_string($libellePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($libellePays)), __LINE__);
        }
        $this->libellePays = $libellePays;
        return $this;
    }
    /**
     * Get loanOfHandlingTool value
     * @return bool|null
     */
    public function getLoanOfHandlingTool()
    {
        return $this->loanOfHandlingTool;
    }
    /**
     * Set loanOfHandlingTool value
     * @param bool $loanOfHandlingTool
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setLoanOfHandlingTool($loanOfHandlingTool = null)
    {
        // validation for constraint: boolean
        if (!is_null($loanOfHandlingTool) && !is_bool($loanOfHandlingTool)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($loanOfHandlingTool)), __LINE__);
        }
        $this->loanOfHandlingTool = $loanOfHandlingTool;
        return $this;
    }
    /**
     * Get parking value
     * @return bool|null
     */
    public function getParking()
    {
        return $this->parking;
    }
    /**
     * Set parking value
     * @param bool $parking
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setParking($parking = null)
    {
        // validation for constraint: boolean
        if (!is_null($parking) && !is_bool($parking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($parking)), __LINE__);
        }
        $this->parking = $parking;
        return $this;
    }
    /**
     * Get reseau value
     * @return string|null
     */
    public function getReseau()
    {
        return $this->reseau;
    }
    /**
     * Set reseau value
     * @param string $reseau
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setReseau($reseau = null)
    {
        // validation for constraint: string
        if (!is_null($reseau) && !is_string($reseau)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reseau)), __LINE__);
        }
        $this->reseau = $reseau;
        return $this;
    }
    /**
     * Get accesPersonneMobiliteReduite value
     * @return bool|null
     */
    public function getAccesPersonneMobiliteReduite()
    {
        return $this->accesPersonneMobiliteReduite;
    }
    /**
     * Set accesPersonneMobiliteReduite value
     * @param bool $accesPersonneMobiliteReduite
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setAccesPersonneMobiliteReduite($accesPersonneMobiliteReduite = null)
    {
        // validation for constraint: boolean
        if (!is_null($accesPersonneMobiliteReduite) && !is_bool($accesPersonneMobiliteReduite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accesPersonneMobiliteReduite)), __LINE__);
        }
        $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;
        return $this;
    }
    /**
     * Get adresse1 value
     * @return string|null
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }
    /**
     * Set adresse1 value
     * @param string $adresse1
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setAdresse1($adresse1 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse1) && !is_string($adresse1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adresse1)), __LINE__);
        }
        $this->adresse1 = $adresse1;
        return $this;
    }
    /**
     * Get adresse2 value
     * @return string|null
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }
    /**
     * Set adresse2 value
     * @param string $adresse2
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setAdresse2($adresse2 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse2) && !is_string($adresse2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adresse2)), __LINE__);
        }
        $this->adresse2 = $adresse2;
        return $this;
    }
    /**
     * Get adresse3 value
     * @return string|null
     */
    public function getAdresse3()
    {
        return $this->adresse3;
    }
    /**
     * Set adresse3 value
     * @param string $adresse3
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setAdresse3($adresse3 = null)
    {
        // validation for constraint: string
        if (!is_null($adresse3) && !is_string($adresse3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adresse3)), __LINE__);
        }
        $this->adresse3 = $adresse3;
        return $this;
    }
    /**
     * Get codePostal value
     * @return string|null
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    /**
     * Set codePostal value
     * @param string $codePostal
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCodePostal($codePostal = null)
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;
        return $this;
    }
    /**
     * Get congesPartiel value
     * @return bool|null
     */
    public function getCongesPartiel()
    {
        return $this->congesPartiel;
    }
    /**
     * Set congesPartiel value
     * @param bool $congesPartiel
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCongesPartiel($congesPartiel = null)
    {
        // validation for constraint: boolean
        if (!is_null($congesPartiel) && !is_bool($congesPartiel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($congesPartiel)), __LINE__);
        }
        $this->congesPartiel = $congesPartiel;
        return $this;
    }
    /**
     * Get congesTotal value
     * @return bool|null
     */
    public function getCongesTotal()
    {
        return $this->congesTotal;
    }
    /**
     * Set congesTotal value
     * @param bool $congesTotal
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCongesTotal($congesTotal = null)
    {
        // validation for constraint: boolean
        if (!is_null($congesTotal) && !is_bool($congesTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($congesTotal)), __LINE__);
        }
        $this->congesTotal = $congesTotal;
        return $this;
    }
    /**
     * Get coordGeolocalisationLatitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLatitude()
    {
        return $this->coordGeolocalisationLatitude;
    }
    /**
     * Set coordGeolocalisationLatitude value
     * @param string $coordGeolocalisationLatitude
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCoordGeolocalisationLatitude($coordGeolocalisationLatitude = null)
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLatitude) && !is_string($coordGeolocalisationLatitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coordGeolocalisationLatitude)), __LINE__);
        }
        $this->coordGeolocalisationLatitude = $coordGeolocalisationLatitude;
        return $this;
    }
    /**
     * Get coordGeolocalisationLongitude value
     * @return string|null
     */
    public function getCoordGeolocalisationLongitude()
    {
        return $this->coordGeolocalisationLongitude;
    }
    /**
     * Set coordGeolocalisationLongitude value
     * @param string $coordGeolocalisationLongitude
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setCoordGeolocalisationLongitude($coordGeolocalisationLongitude = null)
    {
        // validation for constraint: string
        if (!is_null($coordGeolocalisationLongitude) && !is_string($coordGeolocalisationLongitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coordGeolocalisationLongitude)), __LINE__);
        }
        $this->coordGeolocalisationLongitude = $coordGeolocalisationLongitude;
        return $this;
    }
    /**
     * Get distanceEnMetre value
     * @return int|null
     */
    public function getDistanceEnMetre()
    {
        return $this->distanceEnMetre;
    }
    /**
     * Set distanceEnMetre value
     * @param int $distanceEnMetre
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setDistanceEnMetre($distanceEnMetre = null)
    {
        // validation for constraint: int
        if (!is_null($distanceEnMetre) && !is_numeric($distanceEnMetre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distanceEnMetre)), __LINE__);
        }
        $this->distanceEnMetre = $distanceEnMetre;
        return $this;
    }
    /**
     * Get horairesOuvertureDimanche value
     * @return string|null
     */
    public function getHorairesOuvertureDimanche()
    {
        return $this->horairesOuvertureDimanche;
    }
    /**
     * Set horairesOuvertureDimanche value
     * @param string $horairesOuvertureDimanche
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureDimanche($horairesOuvertureDimanche = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureDimanche) && !is_string($horairesOuvertureDimanche)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureDimanche)), __LINE__);
        }
        $this->horairesOuvertureDimanche = $horairesOuvertureDimanche;
        return $this;
    }
    /**
     * Get horairesOuvertureJeudi value
     * @return string|null
     */
    public function getHorairesOuvertureJeudi()
    {
        return $this->horairesOuvertureJeudi;
    }
    /**
     * Set horairesOuvertureJeudi value
     * @param string $horairesOuvertureJeudi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureJeudi($horairesOuvertureJeudi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureJeudi) && !is_string($horairesOuvertureJeudi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureJeudi)), __LINE__);
        }
        $this->horairesOuvertureJeudi = $horairesOuvertureJeudi;
        return $this;
    }
    /**
     * Get horairesOuvertureLundi value
     * @return string|null
     */
    public function getHorairesOuvertureLundi()
    {
        return $this->horairesOuvertureLundi;
    }
    /**
     * Set horairesOuvertureLundi value
     * @param string $horairesOuvertureLundi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureLundi($horairesOuvertureLundi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureLundi) && !is_string($horairesOuvertureLundi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureLundi)), __LINE__);
        }
        $this->horairesOuvertureLundi = $horairesOuvertureLundi;
        return $this;
    }
    /**
     * Get horairesOuvertureMardi value
     * @return string|null
     */
    public function getHorairesOuvertureMardi()
    {
        return $this->horairesOuvertureMardi;
    }
    /**
     * Set horairesOuvertureMardi value
     * @param string $horairesOuvertureMardi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureMardi($horairesOuvertureMardi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMardi) && !is_string($horairesOuvertureMardi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureMardi)), __LINE__);
        }
        $this->horairesOuvertureMardi = $horairesOuvertureMardi;
        return $this;
    }
    /**
     * Get horairesOuvertureMercredi value
     * @return string|null
     */
    public function getHorairesOuvertureMercredi()
    {
        return $this->horairesOuvertureMercredi;
    }
    /**
     * Set horairesOuvertureMercredi value
     * @param string $horairesOuvertureMercredi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureMercredi($horairesOuvertureMercredi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureMercredi) && !is_string($horairesOuvertureMercredi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureMercredi)), __LINE__);
        }
        $this->horairesOuvertureMercredi = $horairesOuvertureMercredi;
        return $this;
    }
    /**
     * Get horairesOuvertureSamedi value
     * @return string|null
     */
    public function getHorairesOuvertureSamedi()
    {
        return $this->horairesOuvertureSamedi;
    }
    /**
     * Set horairesOuvertureSamedi value
     * @param string $horairesOuvertureSamedi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureSamedi($horairesOuvertureSamedi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureSamedi) && !is_string($horairesOuvertureSamedi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureSamedi)), __LINE__);
        }
        $this->horairesOuvertureSamedi = $horairesOuvertureSamedi;
        return $this;
    }
    /**
     * Get horairesOuvertureVendredi value
     * @return string|null
     */
    public function getHorairesOuvertureVendredi()
    {
        return $this->horairesOuvertureVendredi;
    }
    /**
     * Set horairesOuvertureVendredi value
     * @param string $horairesOuvertureVendredi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setHorairesOuvertureVendredi($horairesOuvertureVendredi = null)
    {
        // validation for constraint: string
        if (!is_null($horairesOuvertureVendredi) && !is_string($horairesOuvertureVendredi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($horairesOuvertureVendredi)), __LINE__);
        }
        $this->horairesOuvertureVendredi = $horairesOuvertureVendredi;
        return $this;
    }
    /**
     * Get identifiant value
     * @return string|null
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    /**
     * Set identifiant value
     * @param string $identifiant
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setIdentifiant($identifiant = null)
    {
        // validation for constraint: string
        if (!is_null($identifiant) && !is_string($identifiant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifiant)), __LINE__);
        }
        $this->identifiant = $identifiant;
        return $this;
    }
    /**
     * Get indiceDeLocalisation value
     * @return string|null
     */
    public function getIndiceDeLocalisation()
    {
        return $this->indiceDeLocalisation;
    }
    /**
     * Set indiceDeLocalisation value
     * @param string $indiceDeLocalisation
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setIndiceDeLocalisation($indiceDeLocalisation = null)
    {
        // validation for constraint: string
        if (!is_null($indiceDeLocalisation) && !is_string($indiceDeLocalisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indiceDeLocalisation)), __LINE__);
        }
        $this->indiceDeLocalisation = $indiceDeLocalisation;
        return $this;
    }
    /**
     * Get listeConges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPickupPoint\StructType\Conges[]|null
     */
    public function getListeConges()
    {
        return isset($this->listeConges) ? $this->listeConges : null;
    }
    /**
     * Set listeConges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\Conges[] $listeConges
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setListeConges(array $listeConges = array())
    {
        foreach ($listeConges as $pointRetraitListeCongesItem) {
            // validation for constraint: itemType
            if (!$pointRetraitListeCongesItem instanceof \ColissimoPickupPoint\StructType\Conges) {
                throw new \InvalidArgumentException(sprintf('The listeConges property can only contain items of \ColissimoPickupPoint\StructType\Conges, "%s" given', is_object($pointRetraitListeCongesItem) ? get_class($pointRetraitListeCongesItem) : gettype($pointRetraitListeCongesItem)), __LINE__);
            }
        }
        if (is_null($listeConges) || (is_array($listeConges) && empty($listeConges))) {
            unset($this->listeConges);
        } else {
            $this->listeConges = $listeConges;
        }
        return $this;
    }
    /**
     * Add item to listeConges value
     * @throws \InvalidArgumentException
     * @param \ColissimoPickupPoint\StructType\Conges $item
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function addToListeConges(\ColissimoPickupPoint\StructType\Conges $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPickupPoint\StructType\Conges) {
            throw new \InvalidArgumentException(sprintf('The listeConges property can only contain items of \ColissimoPickupPoint\StructType\Conges, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->listeConges[] = $item;
        return $this;
    }
    /**
     * Get localite value
     * @return string|null
     */
    public function getLocalite()
    {
        return $this->localite;
    }
    /**
     * Set localite value
     * @param string $localite
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setLocalite($localite = null)
    {
        // validation for constraint: string
        if (!is_null($localite) && !is_string($localite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localite)), __LINE__);
        }
        $this->localite = $localite;
        return $this;
    }
    /**
     * Get nom value
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set nom value
     * @param string $nom
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setNom($nom = null)
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nom)), __LINE__);
        }
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get periodeActiviteHoraireDeb value
     * @return string|null
     */
    public function getPeriodeActiviteHoraireDeb()
    {
        return $this->periodeActiviteHoraireDeb;
    }
    /**
     * Set periodeActiviteHoraireDeb value
     * @param string $periodeActiviteHoraireDeb
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setPeriodeActiviteHoraireDeb($periodeActiviteHoraireDeb = null)
    {
        // validation for constraint: string
        if (!is_null($periodeActiviteHoraireDeb) && !is_string($periodeActiviteHoraireDeb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($periodeActiviteHoraireDeb)), __LINE__);
        }
        $this->periodeActiviteHoraireDeb = $periodeActiviteHoraireDeb;
        return $this;
    }
    /**
     * Get periodeActiviteHoraireFin value
     * @return string|null
     */
    public function getPeriodeActiviteHoraireFin()
    {
        return $this->periodeActiviteHoraireFin;
    }
    /**
     * Set periodeActiviteHoraireFin value
     * @param string $periodeActiviteHoraireFin
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setPeriodeActiviteHoraireFin($periodeActiviteHoraireFin = null)
    {
        // validation for constraint: string
        if (!is_null($periodeActiviteHoraireFin) && !is_string($periodeActiviteHoraireFin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($periodeActiviteHoraireFin)), __LINE__);
        }
        $this->periodeActiviteHoraireFin = $periodeActiviteHoraireFin;
        return $this;
    }
    /**
     * Get poidsMaxi value
     * @return int|null
     */
    public function getPoidsMaxi()
    {
        return $this->poidsMaxi;
    }
    /**
     * Set poidsMaxi value
     * @param int $poidsMaxi
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setPoidsMaxi($poidsMaxi = null)
    {
        // validation for constraint: int
        if (!is_null($poidsMaxi) && !is_numeric($poidsMaxi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($poidsMaxi)), __LINE__);
        }
        $this->poidsMaxi = $poidsMaxi;
        return $this;
    }
    /**
     * Get typeDePoint value
     * @return string|null
     */
    public function getTypeDePoint()
    {
        return $this->typeDePoint;
    }
    /**
     * Set typeDePoint value
     * @param string $typeDePoint
     * @return \ColissimoPickupPoint\StructType\PointRetrait
     */
    public function setTypeDePoint($typeDePoint = null)
    {
        // validation for constraint: string
        if (!is_null($typeDePoint) && !is_string($typeDePoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeDePoint)), __LINE__);
        }
        $this->typeDePoint = $typeDePoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPickupPoint\StructType\PointRetrait
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
