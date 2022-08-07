<?php

namespace App;

use Webmozart\Console\Api\Args\Args;
use Webmozart\Console\Api\Command\Command;
use Webmozart\Console\Api\IO\IO;

class FahrenheitToCelsiusHandler
{
    public function handle(Args $args, IO $io, Command $command)
    {
        $valueToConvert = $args->getOption('value');
        $io->writeLine(TemperatureConverter::convertFahrenheitToCelsius($valueToConvert));

        return 0;
    }
}