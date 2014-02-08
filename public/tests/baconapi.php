<?php

require_once '../../vendor/autoload.php';

$bacon = new Sunshine\Api\Bacon();
echo $bacon->getContent(3);