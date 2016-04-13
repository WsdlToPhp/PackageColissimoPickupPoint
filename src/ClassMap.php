<?php

namespace ColissimoPickupPoint;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'PointRetrait' => 'ColissimoPickupPoint\StructType\PointRetrait',
            'Conges' => 'ColissimoPickupPoint\StructType\Conges',
            'findRDVPointRetraitAcheminement' => 'ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminement',
            'findRDVPointRetraitAcheminementResponse' => 'ColissimoPickupPoint\StructType\FindRDVPointRetraitAcheminementResponse',
            'rdvPointRetraitAcheminementResult' => 'ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementResult',
            'pointRetraitAcheminementResult' => 'ColissimoPickupPoint\StructType\PointRetraitAcheminementResult',
            'pointRetraitAcheminement' => 'ColissimoPickupPoint\StructType\PointRetraitAcheminement',
            'findInternalPointRetraitAcheminementByID' => 'ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByID',
            'findInternalPointRetraitAcheminementByIDResponse' => 'ColissimoPickupPoint\StructType\FindInternalPointRetraitAcheminementByIDResponse',
            'pointRetraitAcheminementByIDResult' => 'ColissimoPickupPoint\StructType\PointRetraitAcheminementByIDResult',
            'findInternalRDVPointRetraitAcheminementByID' => 'ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByID',
            'findInternalRDVPointRetraitAcheminementByIDResponse' => 'ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementByIDResponse',
            'rdvPointRetraitAcheminementByIDResult' => 'ColissimoPickupPoint\StructType\RdvPointRetraitAcheminementByIDResult',
            'findInternalRDVPointRetraitAcheminement' => 'ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminement',
            'findInternalRDVPointRetraitAcheminementResponse' => 'ColissimoPickupPoint\StructType\FindInternalRDVPointRetraitAcheminementResponse',
            'findPointRetraitAcheminementByID' => 'ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByID',
            'findPointRetraitAcheminementByIDResponse' => 'ColissimoPickupPoint\StructType\FindPointRetraitAcheminementByIDResponse',
        );
    }
}
