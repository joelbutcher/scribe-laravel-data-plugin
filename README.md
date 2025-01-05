# Scribe Laravel Data Plugin

<a href="https://github.com/joelbutcher/scribe-laravel-data-plugin/actions">
    <img src="https://github.com/joelbutcher/scribe-laravel-data-plugin/workflows/tests/badge.svg" alt="Build Status">
</a>
<a href="https://packagist.org/packages/joelbutcher/scribe-laravel-data-plugin">
    <img src="https://img.shields.io/packagist/dt/joelbutcher/scribe-laravel-data-plugin" alt="Total Downloads">
</a>
<a href="https://packagist.org/packages/joelbutcher/scribe-laravel-data-plugin">
    <img src="https://img.shields.io/packagist/v/joelbutcher/scribe-laravel-data-plugin" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/joelbutcher/scribe-laravel-data-plugin">
    <img src="https://img.shields.io/packagist/l/joelbutcher/scribe-laravel-data-plugin" alt="License">
</a>

## Overview

A scribe plugin that retrieves body parameters from Laravel Routes using [Spatie's Laravel Data](https://github.com/spatie/laravel-data) package in replacement of Laravel Form Requests.

## Installation

Install the package via composer:

```shell
composer require joelbutcher/scribe-laravel-data-plugin
```

Add the plugin to the `strategies.bodyParameters` array in your `config/scribe.php` file:

```php
...
    'strategies' => [
        ...
        'bodyParameters' => [
            \JoelButcher\ScribeLaravelDataPlugin\Plugin::class,
            ...
        ],
        ...
    ],
```

That's it! Run the `scribe:generate` artisan command.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joel Butcher](https://github.com/joelbutcher)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
