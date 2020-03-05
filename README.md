[![Build Status](https://travis-ci.org/jeffreyvr/rdw-opendata-php.svg?branch=master)](https://travis-ci.org/jeffreyvr/rdw-opendata-php)

# RDW Open Data

Simple library for getting vehicle data by license plate number.

Data source: https://opendata.rdw.nl

## Installation

`composer require jeffreyvanrossum/rdw-opendata-php:^1.0`

## Example usage

You call the static `get` method on the `RDW` class. You can pass two parameters: `license` and `data`.

```php
use RDWOA\RDW;

$data = RDW::get('90FPDP');

echo $data->merk;
```

```php
$data = RDW::get('90FPDP', 'brandstof');

echo $data->brandstof_omschrijving;
```

## Possible data sets

* info
* assen
* brandstof
* carrosserie
* carrosserieSpecifiek
* voertuigklasse

## Changelog

# Version 1.1
* Added new data set "Assen".

# Version 1.0
* Project forked from jeffreyvr/rdw-opendata-php
