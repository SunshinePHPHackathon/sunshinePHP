<?php

require_once '../../vendor/autoload.php';
require_once '../../config/config.php';

$config = new \Zend\Config\Config(require '../../config/config.php');

use Sunshine\Api\FourSquare;

$fs = new FourSquare($config['fsApiKey']);

$apiResponse = $fs->getVenues($config['fsApiToken'], "Chicago", "IL", "Italian");

$venues = json_decode($apiResponse);

var_dump($venues);