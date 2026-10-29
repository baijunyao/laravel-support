# Laravel Support

## Compatibility

Laravel 13 requires PHP 8.3 or later. CI covers Laravel 13 on PHP 8.3–8.5,
and Laravel 11 and 12 on PHP 8.3. Existing Illuminate dependency constraints
for older releases are retained.

## Development

With PHP 8.3 or later:

```bash
composer update --with orchestra/testbench:^11.0
composer phpunit
composer phpstan
composer phpcs -- --dry-run --diff
```

## Features
- `Str::isTrue()`
- `Str::isFalse()`
- `Str::isNull()`
- `Str::isJsonArray()`
- `Str::isJsonObject()`

## Installation
```bash
composer require baijunyao/laravel-support
```
