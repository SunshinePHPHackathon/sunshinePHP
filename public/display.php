<?php

require_once 'shared.php';

use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\Note;

$cc = new ConstantContact($config['ccApiKey']);
$contact = $cc->getContact($config['ccApiToken'], $_GET['id']);

$baconBits = substr($contact->company_name, 2);
$zombiePic = $contact->notes[0]->note;

?>

Name: <?=$contact->first_name.' '.$contact->last_name;?>
Quote: <quote><?=$baconBits;?></quote>
<img src="<?=$zombiePic?>" width="250" />