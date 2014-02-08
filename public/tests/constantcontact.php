<?php

require_once '../../vendor/autoload.php';
require_once '../../config/config.php';

$config = new \Zend\Config\Config(require '../../config/config.php');

use Ctct\ConstantContact;
$cc = new ConstantContact($config['ccApiKey']);

$contacts = $cc->getContacts($config['ccApiToken']);

var_dump($contacts);