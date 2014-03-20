<?php

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

//$me = $api->people->getById(1);

$criteria = new DeskPRO\Criteria\People();

$criteria->addEmail('abhinav@nimbleimps.com');
$criteria->addEmail('imaptesting940@gmail.com');

$people = $api->people->find($criteria);

foreach ($people as $person) {
	if ($person instanceof DeskPRO\Person) {
		echo $person->getId(), '. ', $person->getName(), ' &lt;', $person->getEmail(), '&gt;<br/>';
	}
}