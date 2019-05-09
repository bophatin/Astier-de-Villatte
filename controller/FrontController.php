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
		if (isset($_POST["email"])) {
			$email = htmlspecialchars($_POST["email"]);
		} else {
			echo "Merci de renseigner votre email <br/>";
			$email = "";
		}

		if (!empty($_POST['email'])) {
			$syntaxe = " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ";
			
			if(preg_match($syntaxe, $email)) {
				$emailpost = new Newsletter([
					'email' => htmlspecialchars($_POST['email'])
				]);
		
				$addnewmail = new NewsletterManager();
				$addemail = $addnewmail->add($emailpost);

				echo 'Success';
			} else {
				echo 'Error';
			}
		} else {
			echo 'Veuillez renseigner votre email';
		} 
		require 'view/indexView.php';
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

			// GERE AFFICHAGE PAGE OU ERREUR
			if ($nameMenu->id() == false) {
				require 'view/404View.php';
			} else {
				require 'view/allArticlesView.php';
			}
		} else {
			require 'view/404View.php';
		}
	}


	// PAGE ARTICLE

	public static function getArticle() {
		if (isset($_GET['id']) AND !empty($_GET['id'])) {

			$id = htmlspecialchars(($_GET['id']));
			$article = new ArticleManager();
			$post = $article->getArt($id);

			// GERE AFFICHAGE PAGE OU ERREUR
			if ($post->id() == false) {
				require 'view/404View.php';
			} else {
				require 'view/articleView.php';
			}
		} else {
			require 'view/404View.php';
		}
	}


	// PAGE CONTACT

	public static function formContact() {

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

				$mail = new PHPMailer(true);

				try {
					//Server settings
					$mail->SMTPDebug = 2;                                
					$mail->isSMTP();                                  
					$mail->Host       = 'ns0.ovh.net';  
					$mail->SMTPAuth   = false;                                 
					$mail->Username   = 'contact@bophatin.com';                 
					$mail->Password   = '**********';                       
					$mail->SMTPSecure = 'tls';                               
					$mail->Port       = 587;                                   
				
					//Recipients
					$mail->setFrom($email);
					$mail->addAddress('contact@bophatin.com', 'Contact Astier de Villatte');              
					$mail->addReplyTo($email);

					// Content
					$mail->isHTML(true);                                
					$mail->Subject = $sujet;
					$mail->Body    = $message;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					$mail->send();

					echo 'Message envoyé !';
				} catch (Exception $e) {
					echo "Erreur : {$mail->ErrorInfo}";
				}
			}
			require 'view/contactView.php';
		}
}


