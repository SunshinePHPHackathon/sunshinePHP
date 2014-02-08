<?php

require_once '../../vendor/autoload.php';

$beer = new Sunshine\Api\Beer();
$breweries = $beer->getBreweries('Miami', 'Florida');
var_dump($breweries);