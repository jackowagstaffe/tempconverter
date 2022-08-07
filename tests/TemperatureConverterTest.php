<?php

use PHPUnit\Framework\TestCase;
use App\TemperatureConverter;

class TemperatureConverterTest extends TestCase
{
    public function provideConversionData() : array
    {
        return [
            [0, 32],
            [10, 50],
            [-17.777777777778, 0],
            [37.777777777778, 100],
        ];
    }

    /**
     * @dataProvider provideConversionData
     */
    public function test_convert_fahrenheit_to_celsius($celsius, $fahrenheit)
    {
        $this->assertEqualsWithDelta(
            $celsius,
            TemperatureConverter::convertFahrenheitToCelsius($fahrenheit),
            0.0001
        );
    }

    /**
     * @dataProvider provideConversionData
     */
    public function test_convert_celsius_to_fahrenheit($celsius, $fahrenheit)
    {
        $this->assertEqualsWithDelta(
            $fahrenheit,
            TemperatureConverter::convertCelsiusToFahrenheit($celsius),
            0.0001
        );
    }
}