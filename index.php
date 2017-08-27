<?php 

//include config.php

require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/User.php');
require('controllers/Share.php');

require('models/home.php');
require('models/user.php');
require('models/share.php');

$bootstrap = new bootstrap($_GET);
$controller = $bootstrap->createController();


if ($controller) {
	$controller->executeAction();
}

