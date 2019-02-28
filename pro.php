<?php
require 'model/Autoloader.php';
require 'controller/ProController.php';
Autoloader::register();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'proIndexView';
}

$page === isset($_GET['page']);

switch($page) {
	case 'proIndexView':
	ProController::getUsers();
	ProController::logPro();
	break;
	
    /*case 'log';
	ProController::logPro();
	break;*/
}
