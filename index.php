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
	case 'indexView':
	require 'view/indexView.php';
	break;

	case 'bougiesView':
	require 'view/bougiesView.php';
	break;

	case 'ceramicView';
	require 'view/ceramicView.php';
	break;

	case 'eauxView';
	FrontController::getListArticles();
	break;

	case 'articleView';
	FrontController::getArticle();
	break;

	case 'about';
	require 'view/aboutView.php';
	break;
}
