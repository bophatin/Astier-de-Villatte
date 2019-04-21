<?php
require 'model/Autoloader.php';
require 'controller/FrontController.php';
Autoloader::register();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'indexView';
}

$page === isset($_GET['page']);


switch($page) {
	case 'headerView':
	FrontController::getListMenu();
	break;

	case 'indexView':
	FrontController::getListSLider();
	break;

	case 'action':
	FrontController::sendNewsletter();
	break;

	case 'allArticles':
	FrontController::getListArticles();
	break;

	case 'articleView':
	FrontController::getArticle();
	break;

	case 'boutiques':
	require 'view/boutiquesView.php';
	break;

	case 'about';
	require 'view/aboutView.php';
	break;

	case 'contact';
	FrontController::formContact();
	break;

	default :
	require 'view/404View.php';
	break;
}
