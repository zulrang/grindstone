<?php

require('../../vendor/autoload.php');

$databaseConfig = require('../../config/database.php');

$task = new \Grindstone\Task(
	new \Grindstone\OraclePDO($databaseConfig)
);

var_dump($task->get(2));
