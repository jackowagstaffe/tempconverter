<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class FahrenheitToCelsiusHandlerTest extends MockeryTestCase
{
    public function test_ftc_command()
    {
        $temperatureConverterMock = Mockery::mock('alias:App\\TemperatureConverter');
        $ioMock = Mockery::mock(\Webmozart\Console\Api\IO\IO::class);
        $argsMock = Mockery::mock(\Webmozart\Console\Api\Args\Args::class);
        $commandMock = Mockery::mock(\Webmozart\Console\Api\Command\Command::class);

        $temperatureConverterMock->shouldReceive('convertFahrenheitToCelsius')
            ->andReturn(0);

        $argsMock->shouldReceive('getOption')->with('value')->andReturn(32);
        $ioMock->shouldReceive('writeLine')->with(0);

        $handler = new \App\FahrenheitToCelsiusHandler();
        $handler->handle($argsMock, $ioMock, $commandMock);
    }
}