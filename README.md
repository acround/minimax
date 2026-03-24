# Minimax PHP

PHP library for [Minimax.rs](https://minimax.rs) API.
Must be used in Yii2 environment.

## Installation
```bash
composer require your-vendor/minimax-php
```

## Usage
```php
use YourVendor\Minimax\Client;

$client = new Client('your-api-key');
$result = $client->someMethod();
```

## Requirements
- PHP >= 8.0

## License
MIT