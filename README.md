# Minimax PHP

![Tests](https://github.com/acround/minimax/actions/workflows/tests.yml/badge.svg)
PHP library for [Minimax.rs](https://minimax.rs) API.
Must be used in Yii2 environment.

## Installation
```bash
composer require acround/minimax-php
```

## Usage
Registered in config/main.php:
```php
'components' => [
    'minimax' => [
        'class'        => \acround\Minimax\MinimaxComponent::class,
        'clientId'     => getenv('MINIMAX_CLIENT_ID'),
        'clientSecret' => getenv('MINIMAX_CLIENT_SECRET'),
        'username'     => getenv('MINIMAX_USERNAME'),
        'password'     => getenv('MINIMAX_PASSWORD'),
    ],
],
```
Using via factory methods:
```php
$mm = Yii::$app->minimax;
 *
// Resources without organizationId (work globally)
$orgs = $mm->organisation()->list();
$orgId = $orgs[0]['OrganisationId'];
 *
// Resources with organizationId
$customers = $mm->customer($orgId)->list();
$invoice   = $mm->issuedInvoice($orgId)->get(12345);
$mm->issuedInvoice($orgId)->send(12345, 'client@example.com');
 *
// Serbian specifics
$mm->eFaktura($orgId)->sendToSystem(12345);
```


## Requirements
- PHP >= 8.0

## License
MIT