# SwaggerClient-php
This API description is based on the api provided by http://cr-api.com

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$tag_id = "tag_id_example"; // string | This parameter represents the clan tag that you can find in the application

try {
    $result = $api_instance->getClan($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClan: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cr-api.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**getClan**](docs/Api/DefaultApi.md#getclan) | **GET** /clan/{tag_id} | Get clan information
*DefaultApi* | [**getProfile**](docs/Api/DefaultApi.md#getprofile) | **GET** /profile/{tag_id} | Get profile information


## Documentation For Models

 - [Arena](docs/Model/Arena.md)
 - [Badge](docs/Model/Badge.md)
 - [Card](docs/Model/Card.md)
 - [CardNames](docs/Model/CardNames.md)
 - [ChestCycle](docs/Model/ChestCycle.md)
 - [Clan](docs/Model/Clan.md)
 - [ClanChest](docs/Model/ClanChest.md)
 - [ClanItem](docs/Model/ClanItem.md)
 - [Error](docs/Model/Error.md)
 - [Experience](docs/Model/Experience.md)
 - [Games](docs/Model/Games.md)
 - [Member](docs/Model/Member.md)
 - [ProfileItem](docs/Model/ProfileItem.md)
 - [Rarity](docs/Model/Rarity.md)
 - [Region](docs/Model/Region.md)
 - [Roles](docs/Model/Roles.md)
 - [Season](docs/Model/Season.md)
 - [ShopOffers](docs/Model/ShopOffers.md)
 - [Stats](docs/Model/Stats.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

cr-api@manutrix.com


# cr-api-php
