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

	case 'adminEditView':
	require 'view/back/adminEditView.php';
	break;

	case 'adminUsersView':
	AdminController::getUsers();
	AdminController::addUser();
	break;

}
