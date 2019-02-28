<?php  

class FrontController {
	
  	public static function getListArticles() {
		if (isset($_GET['id']) AND !empty($_GET['id'])) {
			$getid = htmlspecialchars($_GET['id']);

			// Affichage de tous les articles en fonction de la category cliquée
			$listArt = new ArticleManager();
			$articles = $listArt->getListArt($getid);

			// Affichage des infos en fonction de la category cliquée
			$newNameMenu = new CategoryManager();
			$nameMenu = $newNameMenu->getCat($getid);

			require 'view/allArticlesView.php';
		}
	}
		
	public static function getListMenu() {
		$test = new CategoryManager();
		$menu = $test->getListCat();
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

	public static function sendNewsletter() {
		// Add
		if(isset($_POST['sendemail'])) {
			if (isset($_POST['email'])) {
				if (!empty($_POST['email'])) {

					$email = $_POST['email'];
					$syntaxe=" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ";

					if(preg_match($syntaxe, $email)) {
						$emailpost = new Newsletter([
							'email' => htmlspecialchars($_POST['email'])
						]);
	
						$addnewmail = new NewsletterManager();
						$addemail = $addnewmail->add($emailpost);
						
						echo 'Success';
						header('Location:index.php');
					} else {
						echo 'Failed';
					}
				} else {
					echo "Tous les champs doivent être complétés !";
				}
			}
		}

		// Get
		$titre = "Newsletters";
		$getm = new NewsletterManager();
		$getemails = $getm->getListEmail();
	}
}


