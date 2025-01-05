<?php

declare(strict_types=1);

namespace JoelButcher\ScribeLaravelDataPlugin\Tests;

use Knuckles\Scribe\ScribeServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Spatie\LaravelData\LaravelDataServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [LaravelDataServiceProvider::class, ScribeServiceProvider::class];
    }
}
