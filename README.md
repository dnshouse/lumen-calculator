# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

### You can start a local instance by running

```php -S localhost:8000 -t public```

### To make some calculations 
you can send JSON POST request to:

```http://localhost:8000/api/v1/calculate```

example request body:
```
{
  "a": 6,
  "b": 2,
  "operation": "*"
}
```
valid operations are:
```+ - * /```

### To run the tests
```php vendor/bin/phpunit```

### License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
