<?php

namespace RedberryProducts\LaravelVersion;

class LaravelVersion
{

    protected string $composerVersion;
    protected string $envVersion;

    public function __construct()
    {
        $this->composerVersion = json_decode(file_get_contents(base_path('composer.json')))->version ?? 'N/A';
        $this->envVersion = config('version.app_version');
    }


    public function getComposerVersion()
    {
        return $this->composerVersion;
    }

    public function getEnvVersion()
    {
        return $this->envVersion;
    }

    public function getVersion()
    {
        return [
            'composer_version' => $this->getComposerVersion(),
            'env_version' => $this->getEnvVersion(),
        ];
    }

    public function getLaravelVersion()
    {
        return app()->version();
    }
}
