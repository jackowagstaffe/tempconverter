<?php

namespace App;

class TemperatureConverter
{
    public static function convertCelsiusToFahrenheit(float $valueInCelsius) : float
    {
        return ($valueInCelsius * 9/5) + 32;
    }

    public static function convertFahrenheitToCelsius(float $valueInFahrenheit) : float
    {
        return ($valueInFahrenheit - 32) * (5/9);
    }
}