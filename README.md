# Embedly PHP API Library for Laravel 4
====================

Embedly PHP api integration for laravel 4

## Quick-install

```json
{
    "require": {
        "rafpro/embedly-l4": "dev-master"
    }
}
```

<a name="requirements"/>
## Requirements

- any flavor of PHP 5.3+ should do
- Laravel 4.x
- Embedly official php library
```
"embedly/embedly-php": "dev-master"
```

Then, in config/app.php add this line to your 'providers' array.

```php
'Rafpro\EmbedlyL4\EmbedlyL4ServiceProvider',
```

Then, to install it's configuration file.

```php
php artisan config:publish rafpro/embedly-l4
```