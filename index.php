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

FrontController::getListMenu();

switch($page) {
	case 'indexView':
	FrontController::getListSLider();
	break;

	case 'action':
	FrontController::sendNewsletter();
	FrontController::formContact();
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

	default : 
	require 'view/404View.php';
	break;
}
