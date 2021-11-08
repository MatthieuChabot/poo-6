<?php

class Speedometer 
{
    public const KM_CONVERSION = 1.6;

    public const MILES_CONVERSION = 0.621;

    public static function convertMilesToKm($miles) {

        return $miles * self::KM_CONVERSION;

    }
    public static function convertKmToMiles($km) {

        return $km * self::MILES_CONVERSION;

    }
}

echo Speedometer::convertKmToMiles(10);
