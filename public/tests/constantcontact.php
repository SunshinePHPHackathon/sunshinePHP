<?php

use Ctct\ConstantContact;

require_once '../../vendor/autoload.php';
require_once '../../config/config.php';

$config = new \Zend\Config\Config(require '../../config/config.php');

$cc = new ConstantContact($config['ccApiKey']);
$contacts = $cc->getContacts($config['ccApiToken']);

var_dump($contacts);