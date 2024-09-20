<?php

namespace RedberryProducts\LaravelVersion\Http\Controllers;

use Illuminate\Routing\Controller;
use RedberryProducts\LaravelVersion\Facades\LaravelVersion;

class VersionController extends Controller
{
    public function index()
    {
        $composerVersion = LaravelVersion::getComposerVersion();
        $envVersion = LaravelVersion::getEnvVersion();

        return view('version::app', compact('composerVersion', 'envVersion'));
    }
}
