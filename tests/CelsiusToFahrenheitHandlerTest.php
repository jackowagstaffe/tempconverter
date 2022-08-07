<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class CelsiusToFahrenheitHandlerTest extends MockeryTestCase
{
    public function test_ctf_command()
    {
        $temperatureConverterMock = Mockery::mock('alias:App\\TemperatureConverter');
        $ioMock = Mockery::mock(\Webmozart\Console\Api\IO\IO::class);
        $argsMock = Mockery::mock(\Webmozart\Console\Api\Args\Args::class);
        $commandMock = Mockery::mock(\Webmozart\Console\Api\Command\Command::class);

        $temperatureConverterMock->shouldReceive('convertCelsiusToFahrenheit')
            ->andReturn(32);

        $argsMock->shouldReceive('getOption')->with('value')->andReturn(0);
        $ioMock->shouldReceive('writeLine')->with(32);

        $handler = new \App\CelsiusToFahrenheitHandler();
        $handler->handle($argsMock, $ioMock, $commandMock);
    }
}