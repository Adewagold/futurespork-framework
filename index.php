<?php 

//include config.php

require('config.php');
require('classes/bootstrap.php');

$bootstrap = new bootstrap($_GET);
$bootstrap->createController();

