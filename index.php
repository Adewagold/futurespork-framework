<?php 

//include config.php

require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('controller/home.php');

$bootstrap = new bootstrap($_GET);
$controller = $bootstrap->createController();


if ($controller) {
	$controller->executeAction();
}

