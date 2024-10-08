# Blade Icons Template

<a href="https://github.com/itliusha/blade-quicksand-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-quicksand-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/itliusha/blade-quicksand-icons">
    <img src="https://img.shields.io/packagist/v/itliusha/blade-quicksand-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/itliusha/blade-quicksand-icons">
    <img src="https://img.shields.io/packagist/dt/itliusha/blade-quicksand-icons" alt="Total Downloads">
</a>

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require itliusha/blade-quicksand-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade quicksand uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade quicksand also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-quicksand.php` config file:

```bash
php artisan vendor:publish --tag=blade-quicksand-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-quicksand-o-adjustments/>
```

You can also pass classes to your icon components:

```blade
<x-quicksand-o-adjustments class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-quicksand-o-adjustments style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-quicksand-s-adjustments/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-quicksand --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-quicksand/o-adjustments.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade quicksand is developed and maintained by Blade Developer.

## License

Blade quicksand is open-sourced software licensed under [the MIT license](LICENSE.md).
