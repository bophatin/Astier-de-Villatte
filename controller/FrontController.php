<?php  

class FrontController {
	
  	public static function getListArticles() {
			$listArt = new ArticleManager();
			$articles = $listArt->getListArt();
			require 'view/eauxView.php';
		}
		
	public static function getListMenu() {
		$test = new CategoryManager();
		$ok = $test->getListCat();
		require 'view/headerView.php';
	}

	public static function getArticle() {
		if (isset($_GET['id']) AND !empty($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));
			$article = new ArticleManager();
			$post = $article->getArt($id);

			if ($post == false) {
				require 'view/404View.php';
			} else {
				require 'view/articleView.php';
			}
		}
	}
}