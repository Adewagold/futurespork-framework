<?php 

//include config.php

require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('controllers/home.php');
require('controllers/User.php');
require('controllers/Share.php');

$bootstrap = new bootstrap($_GET);
$controller = $bootstrap->createController();


if ($controller) {
	$controller->executeAction();
}

