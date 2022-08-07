3 Sided Cube Temperature Converter Task
=======================================

## Getting started

Requirements:
- PHP 7.4
- Composer

Install dependencies:
`composer install`

Run Celsius to Fahrenheit command:
`php converter.php ctf --value=0`

Run Fahrenheit to Celsius command:
`php converter.php ftc --value=0`

Run tests:
`vendor/bin/phpunit tests`

## Implementation Notes

The conversion logic has been separated out into the static class TemperatureConverter, if a dependency injection container was being used I'd probably use non-static methods here and pass the class into the constructor of the classes using it for cleaner testing.

I've followed a unit testing style rather than functional testing which tests the command handler separately from the temperature conversion.