<?php
require 'model/Autoloader.php';
require 'controller/FrontController.php';
require 'controller/AdminController.php';
Autoloader::register();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'adminLogView';
}

$page === isset($_GET['page']);

switch($page) {
	case 'adminLogView':
	AdminController::logPro();
	break;

	case 'logout':
	AdminController::logout();
	break;

	case 'adminCategoryView':
	AdminController::addNewCat();
	break;

	case 'adminArticlesView':
	require 'view/back/adminArticlesView.php';
	break;

	case 'adminMediaView':
	require 'view/back/adminMediaView.php';
	break;

	case 'adminUsersView':
	AdminController::getUsers();
	AdminController::addUser();
	break;

	/* appeler ase "action" pour gérer tous les boutons submit */

}
