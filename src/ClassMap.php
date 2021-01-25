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
            'PointRetrait' => '\\ColissimoPickupPoint\\StructType\\PointRetrait',
            'Conges' => '\\ColissimoPickupPoint\\StructType\\Conges',
            'findRDVPointRetraitAcheminement' => '\\ColissimoPickupPoint\\StructType\\FindRDVPointRetraitAcheminement',
            'findRDVPointRetraitAcheminementResponse' => '\\ColissimoPickupPoint\\StructType\\FindRDVPointRetraitAcheminementResponse',
            'rdvPointRetraitAcheminementResult' => '\\ColissimoPickupPoint\\StructType\\RdvPointRetraitAcheminementResult',
            'pointRetraitAcheminementResult' => '\\ColissimoPickupPoint\\StructType\\PointRetraitAcheminementResult',
            'pointRetraitAcheminement' => '\\ColissimoPickupPoint\\StructType\\PointRetraitAcheminement',
            'findRDVPointRetraitAcheminementByToken' => '\\ColissimoPickupPoint\\StructType\\FindRDVPointRetraitAcheminementByToken',
            'findRDVPointRetraitAcheminementByTokenResponse' => '\\ColissimoPickupPoint\\StructType\\FindRDVPointRetraitAcheminementByTokenResponse',
            'findPointRetraitAcheminementByID' => '\\ColissimoPickupPoint\\StructType\\FindPointRetraitAcheminementByID',
            'findPointRetraitAcheminementByIDResponse' => '\\ColissimoPickupPoint\\StructType\\FindPointRetraitAcheminementByIDResponse',
            'pointRetraitAcheminementByIDResult' => '\\ColissimoPickupPoint\\StructType\\PointRetraitAcheminementByIDResult',
            'Exception' => '\\ColissimoPickupPoint\\StructType\\Exception',
        );
    }
}
