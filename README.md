[![Build Status](https://travis-ci.org/automex/rdw-opendata-php.svg?branch=master)](https://travis-ci.org/automex/rdw-opendata-php)

# RDW Open Data

Simple library for getting vehicle data by vehicle registration plate.

Data source: https://opendata.rdw.nl

<!--## Installation

`composer require automex/rdw-opendata-php:^1.1`-->

## Example usage

You call the static `get` method on the `RDW` class. You can pass two parameters: `license` and `data`.

```php
use RDWOA\RDW;

$data = RDW::get('XP004T');

echo $data->merk;
```

```php
$data = RDW::get('XP004T', 'brandstof');

echo $data->brandstof_omschrijving;
```

## Possible data sets

* info
* assen
* brandstof
* carrosserie
* carrosserieSpecifiek
* voertuigklasse
* bijzonderheden
* voertuigSubcategorie

## Changelog
```
Version 1.2
* Added new data sets "bijzonderheden" and "voertuigSubcategorie".
* Added new unit tests for "bijzonderheden" and "voertuigSubcategorie".

Version 1.1
* Added new data set "Assen".
* Fixed and updated failing unit tests.
* Added new unit tests for "Assen".

Version 1.0
* Project forked from jeffreyvr/rdw-opendata-php
```
