<?php

require_once 'shared.php';

use Sunshine\Api\FourSquare;
use Sunshine\Api\Bacon;
use Sunshine\Api\Beer;
use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\Note;

// being lazy
extract($_POST);

echo $first_name;
echo $last_name;
echo $email;
echo $city;

$bacon = new Bacon();
$baconLine = $bacon->getContent(1);

// get random zombie pic
$image = rand(1, 8);
$page = rand(1, 20);

$url = "https://ajax.googleapis.com/ajax/services/search/images?q=zombie&v=1.0&imgsz=small&rsz=8&page={$page}";
$data = file_get_contents($url);
$json = json_decode($data);

$cc = new ConstantContact($config['ccApiKey']);

// gets the default list
$list = $cc->getList($config['ccApiToken'], 1);

$note = new Note();
$note->note = $json->responseData->results[$image - 1]->url;

$contact = new Contact();
$contact->first_name = $first_name;
$contact->last_name = $last_name;
$contact->addEmail($email);
$contact->notes = array($note);
$contact->addList($list);
$contact->company_name = substr($baconLine, 0, 49);

$beer = new Beer();
$breweries = $beer->getBreweries($city, $state);

$response = $cc->addContact($config['ccApiToken'], $contact, false);

var_dump($response);


