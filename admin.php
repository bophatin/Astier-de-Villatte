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
	AdminController::getCats();
	AdminController::addNewCat();
	break;

	case 'adminArticlesView':
	AdminController::getListArt();
	break;

	case 'adminMediaView':
	require 'view/back/adminMediaView.php';
	break;

	case 'adminUsersView':
	AdminController::getUsers();
	AdminController::addUser();
	break;

	case 'delete':
	AdminController::delete();
	break;

}
