<?php

namespace RedberryProducts\LaravelVersion\Commands;

use Illuminate\Console\Command;

class LaravelVersionCommand extends Command
{
    public $signature = 'laravel-version';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
