<?php

namespace RedberryProducts\LaravelVersion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RedberryProducts\LaravelVersion\LaravelVersion
 */
class LaravelVersion extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RedberryProducts\LaravelVersion\LaravelVersion::class;
    }
}
