<?php

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

/** ===========  Search for articles matching criteria */

$criteria = $api->articles->createCriteria();

$criteria->addCategory(1);

//$result = $api->articles->find($criteria);

/** ===========  Creates a new article */

$builder = $api->articles->createArticleEditor();

$builder->setTitle("What is an Agent?")
        ->setContent("Agents are anybody with access to the agent or admin interface of your helpdesk and will often include individuals with a range of roles within your organisation including support staff, managers, administrators and business analysts.

You can control which of the 4 interfaces (agent/billing/reports/admin) your agents are allowed to view as well as manage extensive permission controls for those working in the agent interface.

DeskPRO licensing is based on the number of named agents within the system. Agents can not share logins. All DeskPRO licenses and plans include unlimited end users.")
        ->addLabel("API")
        ->addCategory(1);

//$result = $api->articles->save($builder);

/** ===========  Gets information about an article */

//$result = $api->articles->findById(3);

/** ===========  Updates an article */

$builder = $api->articles->createArticleEditor();

$builder->setId(3)->setTitle("Article updated by API");

//$result = $api->articles->save($builder);

/** ===========  Deletes an article */

//$result = $api->articles->deleteById(3);

/** ===========  Gets all comments on an article. */

//$result = $api->articles->getArticleComments(4);

/** ===========  Adds a comment to an article. */

//$result = $api->articles->addArticleComment(4, 'Comment added via API', 4);

/** ===========  Gets a comment on an article. */

$result = $api->articles->getArticleComment(4, 2);

var_dump($result->getData());