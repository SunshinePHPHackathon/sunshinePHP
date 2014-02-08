<?php

require_once '../../vendor/autoload.php';
require_once '../../config/config.php';

$config = new \Zend\Config\Config(require '../../config/config.php');

use Ctct\ConstantContact;
$cc = new ConstantContact('vynubzznpjryt58qquctpccf');

$contacts = $cc->getContacts('926089ce-d56a-42ee-a75c-510a17360313');

var_dump($contacts);