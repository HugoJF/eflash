# Laracasts Flash wrapper for easy HTML escaping

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hugojf/eflash.svg?style=flat-square)](https://packagist.org/packages/hugojf/eflash)
[![Build Status](https://img.shields.io/travis/hugojf/eflash/master.svg?style=flat-square)](https://travis-ci.org/hugojf/eflash)
[![Quality Score](https://img.shields.io/scrutinizer/g/hugojf/eflash.svg?style=flat-square)](https://scrutinizer-ci.com/g/hugojf/eflash)
[![Total Downloads](https://img.shields.io/packagist/dt/hugojf/eflash.svg?style=flat-square)](https://packagist.org/packages/hugojf/eflash)

This package wraps `laracasts/flash` in order to help escape HTML special characters with *almost* the same API. 

**Facade usage is not implemented since I only use the `flash` helper!**

## Why

I got tired of this
```php
$username = e(auth()->user()->username);

flash()->success("Welcome, $username!");
```

And wanted this

```php
eflash()->success('Welcome, %s!', auth()->user()->username);
```

## Installation

You can install the package via composer:

```bash
composer require hugojf/eflash
```

## Usage

Usage should be similar to `laracasts/flash` and `sprintf` function.

The first parameter (the template) is **NOT** escaped in order to allow some HTML in the message.

```php
eflash()->success($format, ...$args);

eflash()->error($format, ...$args);

eflash()->info($format, ...$args);

eflash()->message($format, $level, ...$args);

eflash()->warning($format, ...$args);
```

## Examples

```php
eflash()->success('Welcome %s!', $username);

eflash()->error('Input <strong>%s</strong> is not valid!', $input);

eflash()->info('Server %s was turned off!', $serverName)->important();

eflash()->message('A boring %s', $message)->overlay();

eflash()->warning('Joined team <i>%s</i>!', $teamName)->overlay();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hugo_jeller@hotmail.com instead of using the issue tracker.

## Credits

- [Hugo](https://github.com/hugojf)
- [All Contributors](../../contributors)

## License

The GNU GPLv3. Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
