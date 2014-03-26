<?php

require_once 'vendor/autoload.php';

error_reporting(-1);

ini_set('display_errors', 1);


$api = new DeskPRO\Api('http://abhinav.deskpro.com', '2:KHAQBC4KRX9Q2AZXBZ943XX54');

/** ===========  Search for tasks matching criteria */

$criteria   = $api->tasks->createCriteria();

$criteria->addTitle('new')->isVisible(true);

//$result     = $api->tasks->find($criteria);

/** ===========  Create a new task */

$builder = $api->tasks->createTaskEditor();

$builder->setTicket(192)->setTitle("New Task created by API")->assignToAgent(4)->addLabel("API");

//$result = $api->tasks->save($builder);

/** ===========  Gets a task */

//$result = $api->tasks->findById(2);

/** =========== Updates a Task */

$task = $api->tasks->createTaskEditor();

$task->setId(2)->setTitle("New Title");

//$result = $api->tasks->save($task);

/** =========== Deletes a Task */

//$result = $api->tasks->deleteById(2);

/** =========== Gets task associations */

//$result = $api->tasks->getTaskAssociations(2);

/** =========== Creates a task association */

//$result = $api->tasks->addTaskAssociation(2, 190);

/** =========== Determines if a task association exists */

//$result = $api->tasks->getTaskAssociation(2, 1);

/** =========== Deletes a task association */

//$result = $api->tasks->deleteTaskAssociation(2, 1);

/** =========== Gets all comments for a task */

//$result = $api->tasks->getTaskComments(2);

/** =========== Creates a task comment */

//$result = $api->tasks->addTaskComment(2, 'Comment added by API');

/** =========== Determines if a particular comment ID exists for a task. */

//$result = $api->tasks->getTaskComment(2, 1);

/** =========== Deletes a particular task comment. */

//$result = $api->tasks->deleteTaskComment(2, 1);

/** =========== Gets all labels associated with a task. */

//$result = $api->tasks->getTaskLabels(2);

/** =========== Adds a label to a task. */

//$result = $api->tasks->addTaskLabel(2, 'example');

/** =========== Determines if a task has a specific label. */

//$result = $api->tasks->getTaskLabel(2, 'example');

/** =========== Removes a label from a task. */

$result = $api->tasks->removeTaskLabel(2, 'example');

var_dump($result->getData()); die;