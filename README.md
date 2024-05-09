![Screenshot](https://github.com/tomatophp/filament-pms/blob/master/arts/3x1io-tomato-pms.jpg)

# Filament pms

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-pms/version.svg)](https://packagist.org/packages/tomatophp/filament-pms)
[![PHP Version Require](http://poser.pugx.org/tomatophp/filament-pms/require/php)](https://packagist.org/packages/tomatophp/filament-pms)
[![License](https://poser.pugx.org/tomatophp/filament-pms/license.svg)](https://packagist.org/packages/tomatophp/filament-pms)
[![Downloads](https://poser.pugx.org/tomatophp/filament-pms/d/total.svg)](https://packagist.org/packages/tomatophp/filament-pms)

Project Management Tools for Filament to manage project / tasks / time

## Installation

```bash
composer require tomatophp/filament-pms
```
after install your package please run this command

```bash
php artisan filament-pms:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentPms\FilamentPMSPlugin::make())
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-pms-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-pms-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-pms-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-pms-migrations"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/plugins/laravel-package-generator)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Tomatophp](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
