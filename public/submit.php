<?php

require_once 'shared.php';

use Sunshine\Api\FourSquare;
use Sunshine\Api\Bacon;

// being lazy
extract($_POST);

echo $first_name;
echo $last_name;
echo $email;
echo $city;

$bacon = new Bacon();
$notes = $bacon->getContent(1);

$fs = new FourSquare($config['fsApiKey']);
$venues = json_decode($fs->getVenues($config['fsApiToken'], "Chicago", "IL", "Italian"));

echo $notes;
var_dump($venues);