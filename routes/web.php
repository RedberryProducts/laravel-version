<?php

use Illuminate\Support\Facades\Route;
use RedberryProducts\LaravelVersion\Http\Controllers\VersionBadgeController;
use RedberryProducts\LaravelVersion\Http\Controllers\VersionController;

Route::get('application/version', [VersionController::class, 'index'])->name('application.version');
Route::get('application/version/badge', VersionBadgeController::class)->name('application.version.badge');
