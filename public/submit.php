<?php

require_once 'shared.php';

use Sunshine\Api\FourSquare;
use Sunshine\Api\Bacon;
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
$notes = $bacon->getContent(1);
$note = new Note();
$note->note = $notes;

$cc = new ConstantContact($config['ccApiKey']);

// gets the default list
$list = $cc->getList($config['ccApiToken'], 1);

$contact = new Contact();
$contact->first_name = $first_name;
$contact->last_name = $last_name;
$contact->addEmail($email);
$contact->notes = array($note);
$contact->addList($list);

$response = $cc->addContact($config['ccApiToken'], $contact, false);

var_dump($response);


