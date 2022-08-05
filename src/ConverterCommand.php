<?php

namespace App;

use Webmozart\Console\Config\DefaultApplicationConfig;
use Webmozart\Console\Api\Args\Format\Argument;

class ConverterCommand extends DefaultApplicationConfig
{
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('converter')
            ->setVersion('1.0.0')
            ->beginCommand('ftc')
                ->setDescription('Convert a Fahrenheit value to Celsius')
                ->setHandler(new FahrenheitToCelsiusHandler())
                ->addArgument('valueToConvert', Argument::REQUIRED, 'The value which should be converted')
            ->end()
            ->beginCommand('ctf')
                ->setDescription('Convert a Celsius value to Fahrenheit')
                ->setHandler(new CelsiusToFahrenheitHandler())
                ->addArgument('valueToConvert', Argument::REQUIRED, 'The value which should be converted')
            ->end()
        ;
    }
}