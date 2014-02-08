<?php

use Ctct\ConstantContact;

require '../../vendor/autoload.php';

$config = new \Zend\Config\Config(require '../../config/config.php');

$cc = new ConstantContact($config['ccApiKey']);

$list = $cc->getList($config['ccApiToken'], 1);

$contact = new \Ctct\Components\Contacts\Contact();
$contact->first_name = 'Sunshine';
$contact->last_name = 'PHP';
$contact->addEmail('sun@shine.com');
$contact->addList($list);

$response = $cc->addContact($config['ccApiToken'], $contact, false);

var_dump($response);