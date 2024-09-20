<?php

namespace RedberryProducts\LaravelVersion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RedberryProducts\LaravelVersion\Facades\LaravelVersion;

class VersionBadgeController extends Controller
{
    public function __invoke(Request $request)
    {
        $version = LaravelVersion::getEnvVersion();
        $label = $request->exists('environment') ? $request->get('environment') : 'version';

        return response()->view('version::badge', compact('label', 'version'))->header('Content-Type', 'image/svg+xml');
    }
}
