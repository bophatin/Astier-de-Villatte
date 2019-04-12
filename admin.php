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
	AdminController::addArticle();
	break;

	case 'adminNewsletterView':
	AdminController::getListEmails();
	break;

	case 'adminUsersView':
	AdminController::getUsers();
	AdminController::addUser();
	break;

	case 'updateUsersView':
	AdminController::getUserId();
	AdminController::updateUser();
	break;

	case 'updateCategoryView':
	AdminController::getCatId();
	AdminController::updateCat();
	break;

	case 'updateArticlesView':
	AdminController::getArtId();
	AdminController::updateArt();
	break;

	case 'updateNewsletterView':
	AdminController::getEmailId();
	AdminController::updateEmail();
	break;

	case 'delete':
	AdminController::delete();
	break;

}
