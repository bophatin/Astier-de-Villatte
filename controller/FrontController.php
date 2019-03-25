<?php  

class FrontController {
	
	public static function getListMenu() {
		$newListMenu = new CategoryManager();
		$menu = $newListMenu->getListCat();
		require 'view/headerView.php';
	}


	// HOME PAGE

	public static function getListSlider() {
		$new_slider = new ArticleManager();
		$sliders = $new_slider->getSlider();

		$groupesSliders = array_chunk(array_chunk($sliders, 3), 6);
		require 'view/indexView.php';
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

						/* Mettre fonction sendmail() pour avoir un retour*/

						echo 'Success';
						/*header('Location:index.php');*/
					} else {
						echo 'Failed';
					}
				} /*else {
					echo "Tous les champs doivent être complétés !";
				}*/
			}
		}

		// Get
		$titre = "Newsletters";
		$getm = new NewsletterManager();
		$getemails = $getm->getListEmail();
	}


	// PAGE COLLECTION

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


	// PAGE ARTICLE

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


	// PAGE BOUTIQUES

	public static function formContact() {

		if(isset($_POST['submit'])) {
			echo '<pre>';
			print_r($_POST);
			die();

			if (isset($_POST["nom"])) {
				$nom = htmlspecialchars($_POST["nom"]);
			} else {
				echo "Merci d'écrire un nom <br />";
				$nom = "";
			}

			if (isset($_POST["sujet"])) {
				$sujet = htmlspecialchars($_POST["sujet"]);
			} else {
				echo "Merci d'écrire un sujet <br />";
				$sujet = "";
			}
		
			if ((isset($_POST["email"])) && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
				$email = htmlspecialchars($_POST["email"]);
			} elseif (empty($_POST["email"])) {
				echo "Merci d'écrire une adresse email <br />";
				$email = "";
			} else {
				echo "Email invalide :(<br />";
				$email = "";
			}
		
			if (isset($_POST["message"])) {
				$message = htmlspecialchars($_POST["message"]);
			} else {
				echo "Merci d'écrire un message<br />";
				$message = "";
			}

			if (!empty($_POST['nom']) AND !empty($_POST['sujet']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
				return json_encode(data);
				$newContact = new Contact ([
					'name_contact' => $nom,
					'subject_contact' => $sujet,
					'email_contact' => $email,
					'msg_contact' => $message
				]);

				$newAddContact = new ContactManager();
				$addContact = $newAddContact->add($newContact);
			}
		}
	}
}


