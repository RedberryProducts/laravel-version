# Laravel Version Badge Package

[![Latest Stable Version](https://poser.pugx.org/redberryproducts/laravel-version/v/stable)](https://packagist.org/packages/redberryproducts/laravel-version)
[![Total Downloads](https://poser.pugx.org/redberryproducts/laravel-version/downloads)](https://packagist.org/packages/redberryproducts/laravel-version)
[![License](https://poser.pugx.org/redberryproducts/laravel-version/license)](https://packagist.org/packages/redberryproducts/laravel-version)

This Laravel package generates dynamic version badges that reflect the current application version or Composer version
based on various conditions. The badges can be easily displayed in your application and updated automatically based on
your environment.

## Features

- Display the application version from the `.env` file.
- Display the Composer version from `composer.json`.
- Generate dynamic SVG badges to show the versions.
- Customizable routes for accessing version and badge data.

## Installation

Install the package via Composer:

```bash
composer require redberryproducts/laravel-version
```

## Publish Configuration

After installation, publish the configuration file:

```bash
php artisan vendor:publish --tag=laravel-version-config
```

This will create a config/version.php file where you can set your application version:This will create a
config/version.php file where you can set your application version:

```php 
return [
    'app_version' => env('APP_VERSION', 'N/A'),
];
```

## Usage

### Routes

This package provides two routes for fetching version information and generating badges.

1. Application Version: Retrieves the current version of your application.
    - URL: `/application/version`
    - Controller: `VersionController@index`
    - Returns both the environment version (from .env) and the composer version (from composer.json).
2. Version Badge: Generates an SVG badge with dynamic content based on the requested provider (either composer or env).
    - URL: `/application/version/badge?provider={composer|env}&environment={optional}`
    - Controller: `VersionBadgeController`

### Example Badge

You can include the badge in your application as an SVG by embedding the URL in your frontend or views:

```html
<img src="{{ route('application.version.badge', ['provider' => 'composer']) }}" alt="Composer Version Badge">
<img src="{{ route('application.version.badge', ['provider' => 'env']) }}" alt="Environment Version Badge">
```

## Blade Views

The package also comes with two Blade files for rendering the version and badges.

1. `app.blade.php`: Displays both the environment and composer versions using the badge component.
    ```php
    @include('version::badge', ['label' => 'Environment Version', 'version' => $envVersion])
    @include('version::badge', ['label' => 'Composer Version', 'version' => $composerVersion])
    ```
2. `badge.blade.php`: Generates the SVG for the badge based on the label and version provided.

## Configuration

The package uses the following environment variable in your `.env` file:

```dotenv
APP_VERSION=1.0.0
```

By default, if `APP_VERSION` is not set, it will display N/A.

## Customization

To customize the badge, you can replace `'badge_blade' => 'version::badge',` in the `config/version.php` file with your
custom blade file.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request or open an issue.

1. Fork the repository.
2. Create a feature branch: `git checkout -b feature-branch`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-branch`.
5. Open a pull request.

## Credits

- [Nika Jorjoliani](https://github.com/RedberryProducts)
- [All Contributors](../../contributors)
