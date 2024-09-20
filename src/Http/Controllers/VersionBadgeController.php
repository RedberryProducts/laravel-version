<?php

namespace RedberryProducts\LaravelVersion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RedberryProducts\LaravelVersion\Facades\LaravelVersion;

class VersionBadgeController extends Controller
{
    public function __invoke(Request $request)
    {
        $label = $request->exists('environment') ? $request->get('environment') : app()->environment();
        $version = match ($request->get('provider')) {
            'composer' => LaravelVersion::getComposerVersion(),
            default => LaravelVersion::getEnvVersion(),
        };
        return response()->view(config('version.badge_blade'), compact('label', 'version'))->header('Content-Type', 'image/svg+xml');
    }
}
