<?php

require_once 'shared.php';

use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\Note;

$cc = new ConstantContact($config['ccApiKey']);
$contact = $cc->getContact($config['ccApiToken'], $_GET['id']);

$baconBits = $contact->company_name;
$zombiePic = $contact->notes[0]->note;



var_dump($contact);

?>
<img src="<?=$zombiePic?>" />