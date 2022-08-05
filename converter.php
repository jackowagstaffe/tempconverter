#!/usr/bin/env php
<?php

use Webmozart\Console\ConsoleApplication;
use App\ConverterCommand;

if (file_exists($autoload = __DIR__.'/../../autoload.php')) {
    require_once $autoload;
} else {
    require_once __DIR__ . '/vendor/autoload.php';
}

$cli = new ConsoleApplication(new ConverterCommand());
$cli->run();