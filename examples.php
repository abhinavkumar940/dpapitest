<?php

/**
 * Created by PhpStorm.
 * User: abhinav
 * Date: 24/03/14
 * Time: 4:31 PM
 */

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

/** ===========  Search for people matching criteria */

$criteria = $api->people->createCriteria();

$criteria->addName('abhinav')
    ->addAgentTeam(1)
    ->addEmailDomain('abhinavkumar.in')
    ->agentsOnly();

//$result = $api->people->find($criteria);

/** =========== Create a new Person */

$newUser = $api->people->createPersonEditor();

$newUser->setName("User5 with a Password")
    ->setEmail("anotheruser6@test.com")
    ->setPassword('password');

//$result = $api->people->save($newUser);

/** =========== Gets Information about a Person */

//$result = $api->people->findById(16);

/** =========== Updates a Person */

$user = $api->people->createPersonEditor();

$newUser->setId(16)->setName("User5 with a Password")
    ->setEmail("anotheruser6@test.com")
    ->setPassword('password');

//$result = $api->people->save($newUser);

/** =========== Deletes a Person */

//$result = $api->people->deleteById(15);

/** =========== Resets a Person password*/

$person = $api->people->createPersonEditor();

$person->setId(16)->setPassword("newpassword")->sendMail();

//$result = $api->people->save($person);

/** =========== Resets a Person's sessions */

//$result = $api->people->clearPersonSessions(16);

/** =========== Gets a list of automatically applied SLAs for a person */

//$result = $api->people->getPersonSlas(16);

/** =========== Adds an SLA to the automatically applied SLAs for a person */

//$result = $api->people->addPersonSla(16, 2);

/** =========== Determines if an SLA exists for a person */

//$result = $api->people->getPersonSla(16, 2);

/** =========== Removes an SLA from a person */

//$result = $api->people->deletePersonSla(16, 2);

/** =========== Gets a link to a person's picture */

//$result = $api->people->getPersonPicture(16);

/** =========== Updates a person's picture */

//$result = $api->people->setPersonPicture(16, '/Users/abhinav/Downloads/homer_simpson.jpg');

/** =========== Deletes a person's picture */

//$result = $api->people->deletePersonPicture(16);

/** =========== Gets email records for a person */

//$result = $api->people->getPersonEmails(16);

/** =========== Adds an email for a person */

//$result = $api->people->addPersonEmail(16, 'newemail@newdomain.com');

/** =========== Gets information about an email ID for a person */

//$result = $api->people->getPersonEmail(16, 16);

/** =========== Updates an email record for a person */

//$result = $api->people->updatePersonEmail(16, 17, true, "company email");

/** =========== Deletes an email record for a person */

//$result = $api->people->deletePersonEmail(16, 17);

/** =========== Gets tickets by a person */

//$result = $api->people->getPersonTickets(2);

/** =========== Gets chats by a person */

//$result = $api->people->getPersonChats(2);

/** =========== Gets activity stream for a person */

//$result = $api->people->getPersonActivityStream(2);

/** =========== Gets notes for a person */

//$result = $api->people->getPersonNotes(1);

/** =========== Creates a note for a person */

//$result = $api->people->createPersonNote(16, 'New Note for user # 16');

/** =========== Gets billing charges for a person */

//$result = $api->people->getPersonBillingCharges(16);

/** =========== Gets contact details for a person */

//$result = $api->people->getPersonContactDetails(16);

/** =========== Creates a contact detail for a person */

//$result = $api->people->addPersonContactDetail(16, 'instant_message', array(
//    'service'   => 'aim',
//    'username'  => 'example'
//), 'Added by API');

/** =========== Adds an Address for a person */

//$result = $api->people->addAddress(16, 'Address line1', 'city', 'state', '123456', 'country', 'Added by API');

/** =========== Adds a Facebook Profile for a person */

//$result = $api->people->addFacebook(16, 'https://www.facebook.com/deskpro' , 'Added by API');

/** =========== Adds an Instant Message account for a person */

//$result = $api->people->addIm(16, 'gtalk', 'deskpro', 'Added by API');

/** =========== Adds a LinkedIn profile for a person */

//$result = $api->people->addLinkedIn(16, 'http://www.linkedin.com/company/deskpro', 'Added by API');

/** =========== Adds a Phone Number for a person */

//$result = $api->people->addPhone(16, 9876543210, 'mobile', 91, 'Added by API');

/** =========== Adds a Skype account for a person */

//$result = $api->people->addSkype(16, 'deskpro' , 'Added by API');

/** =========== Adds a Twitter account for a person */

//$result = $api->people->addTwitter(16, 'deskpro' , 'Added by API');

/** =========== Adds a Website for a person */

//$result = $api->people->addWebsite(16, 'http://www.deskpro.com' , 'Added by API');

/** =========== Determines if a particular contact ID exists for a person. */

//$result = $api->people->getPersonContactDetail(16, 8);

/** =========== Removes a particular contact detail from a person. */

//$result = $api->people->removePersonContactDetail(16, 8);

/** =========== Gets the list of groups that the person belongs to. */

//$result = $api->people->getPersonGroups(1);

/** =========== Adds a person to a group. */

//$result = $api->people->addPersonGroup(16, 3);

/** =========== Determines if the a person is a member of a particular group. */

//$result = $api->people->getPersonGroup(16, 3);

/** =========== Removes a person from a group. */

//$result = $api->people->removePersonGroup(16, 3);

/** =========== Gets all labels associated with a person. */

//$result = $api->people->getPersonLabels(16);

/** =========== Adds a label to a person. */

//$result = $api->people->addPersonLabel(16, 'API');

/** =========== Determines if a person has a specific label. */

$result = $api->people->getPersonLabel(16, 'API');

/** =========== Removes a label from a person. */

$result = $api->people->removePersonLabel(16, 'API');

/** =========== Gets a list of custom people fields. */

$result = $api->people->getPeopleFields();

/** =========== Gets a list of available user groups. */

$result = $api->people->getPeopleGroups();



var_dump($result->getData()); die;