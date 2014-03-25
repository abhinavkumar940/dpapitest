<?php

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

/** ===========  Search for organization matching criteria */

$criteria = $api->organization->createCriteria();

$criteria->addName('apple');

//$result = $api->organization->find($criteria);

/** =========== Create a new Organization */

$newOrganization = $api->organization->createOrganizationEditor();

$contactData = new DeskPRO\Builder\ContactData();

$contactData->addAddress('Address 1', 'City', 'State', 123456, 'India', 'Added by API')
        ->addTwitter('testing', 'Added by API')
        ->addSkype('testing', 'Added by API')
        ->addFacebook('https://www.facebook.com/facebook', 'Added by API');

$newOrganization->setName("Another Company Ltd.")
        ->addContactData($contactData)
        ->addLabel("Another Company Ltd.");

//$result = $api->organization->save($newOrganization);

/** =========== Gets Information about an Organization */

//$result = $api->organization->findById(2);

/** =========== Updates an Organization */

$organization = $api->organization->createOrganizationEditor();

$organization->setId(2)->addLabel("New Label")->setSummary("Organization Summary");

//$result = $api->organization->save($organization);

/** =========== Deletes an Organization */

//$result = $api->organization->deleteById(3);

/** =========== Gets a link to an organization's picture */

//$result = $api->organization->getOrganizationPicture(1);

/** =========== Updates an Organization's picture */

//$result = $api->organization->setOrganizationPicture(1, '/Users/abhinav/Downloads/homer_simpson.jpg');

/** =========== Gets all SLAs for an organization. */

//$result = $api->organization->getOrganizationSlas(1);

/** =========== Adds an SLA for an organization. */

//$result = $api->organization->addOrganizationSla(1, 1);

/** =========== Adds an SLA for an organization. */

//$result = $api->organization->getOrganizationSla(1, 1);

/** =========== Removes an SLA for an organization. */

//$result = $api->organization->deleteOrganizationSla(1, 1);

/** =========== Gets all contact details for an organization. */

//$result = $api->organization->getOrganizationContactDetails(2);

/** =========== Determines if a particular contact ID exists for an organization. */

//$result = $api->organization->getOrganizationContactDetail(2, 1);

/** =========== Removes a particular contact detail from an organization. */

//$result = $api->organization->removeOrganizationContactDetail(2, 1);

/** =========== Gets the list of groups that the organization belongs to. */

//$result = $api->organization->getOrganizationGroups(1);

/** =========== Adds an organization to a group. */

//$result = $api->organization->addOrganizationGroup(1, 1);

/** =========== Determines if the an organization is a member of a particular group. */

//$result = $api->organization->getOrganizationGroup(1, 1);

/** =========== Removes an organization from a group. */

//$result = $api->organization->removeOrganizationGroup(1, 1);

/** =========== Gets all labels associated with an organization. */

//$result = $api->organization->getOrganizationLabels(1);

/** =========== Adds a label to an organization. */

//$result = $api->organization->addOrganizationLabel(1, 'New Label');

/** =========== Determines if an organization has a specific label. */

$result = $api->organization->getOrganizationLabel(1, 'New Label');

var_dump($result->getData()); die;