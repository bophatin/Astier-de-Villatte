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
	FrontController::sendNewsletter();
	require 'view/indexView.php';
	break;

	case 'allArticlesView':
	FrontController::getListArticles();
	break;

	case 'articleView';
	FrontController::getArticle();
	break;

	case 'about';
	require 'view/aboutView.php';
	break;	

	default : 
	require 'view/404View.php';
	break;
}
