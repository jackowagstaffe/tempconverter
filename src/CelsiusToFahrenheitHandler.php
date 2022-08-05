<?php

namespace App;

use Webmozart\Console\Api\Args\Args;
use Webmozart\Console\Api\Command\Command;
use Webmozart\Console\Api\IO\IO;

class CelsiusToFahrenheitHandler
{
    public function handle(Args $args, IO $io, Command $command)
    {
        $valueToConvert = $args->getArgument('valueToConvert');
        $io->writeLine(TemperatureConverter::convertCelsiusToFahrenheit($valueToConvert));

        return 0;
    }
}