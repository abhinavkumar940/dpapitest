<?php

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

//$me = $api->people->findById(13);
//
//var_dump($me->getJson()); die;
//
//$person = $api->people->createPersonEditor();
//
//$person->setId(16)->setName("New Name");
//
//$response = $api->people->save($person);
//
//var_dump($response);
//
//die;
//
//$newUser = $api->people->createPersonEditor();
//
//$newUser->setName("User5 with a Password")
//    ->setEmail("anotheruser6@test.com")
//    ->setPassword('password');
//
//$savedUser = $api->people->save($newUser);
//
//var_dump($savedUser->getJson()); die;;
//
//if ($savedUser && $savedUser instanceof DeskPRO\Person) {
//    echo 'User ', $savedUser->getName(), ' Created successfully!';
//} else {
//    echo 'Some error occured!';
//
//    var_dump($api->getErrors());
//}
//
//die;
//
$criteria = $api->people->createCriteria();

$criteria->addName('abhinav');
//    ->addAgentTeam(1)
//    ->addEmailDomain('abhinavkumar.in');

	//->agentsOnly();

$people = $api->people->find($criteria);

var_dump($people->getData()); die;

foreach ($people as $person) {
	if ($person instanceof DeskPRO\Person) {
        //var_dump($person); continue;
		echo $person->getId(), '. ', $person->getName(), ' &lt;', $person->getEmail(), '&gt;<br/>';
	}
}

