<?php

class AdminController {

	const EXTENSION_VALID = array('.png', '.gif', '.jpg', '.jpeg', '.JPEG', '.JPG');
	const POIDS_IMG_MAX = 10000000;

	/* LOG */ 

    public static function log() {
		if(isset($_POST['submit'])) {
			if (isset($_POST['username'], $_POST['password'])) {
				if(!empty($_POST['username']) AND !empty($_POST['password'])) {
					$name = htmlspecialchars($_POST['username']);
					$pwd = htmlspecialchars($_POST['password']);
			
					$newUser = new User([
						'name_admin' => $name,
						'pwd_admin' => $pwd
					]);
				
					$userManager = new UserManager();
					$user = $userManager->logUser($name);
					
					$pwd_BDD = $user->pwdAdmin();
					$valid_Pwd = password_verify($pwd, $pwd_BDD);
	
					if($valid_Pwd) {
						session_start();
						$_SESSION['username'] = $_POST['username'];
						header('Location:admin.php?page=adminCategoryView');
					} else {
						$error = "Identifiants incorrects"; 
					}
				} else {
					$error = "Tous les champs doivent être complétés !";
				}
			} 
		} require 'view/back/adminLogView.php';
	}

	public static function logout() {
		session_start();
		$_SESSION = array();

		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}
		session_destroy();
		header('Location: admin.php');
	}


	/* USERS */

	public static function editUsers() {

		// afficher liste des users
		$newUser = new UserManager();
		$getUser = $newUser->getListUsers();

		// ajouter un user
		if(isset($_POST['create'])) {
			if (isset($_POST['pseudo-add'], $_POST['mdp-add'])) {
				if (!empty($_POST['pseudo-add']) AND !empty($_POST['mdp-add'])) {

					if(strlen($_POST['pseudo-add']) > 255){
						echo "Le pseudo recquiert 255 caractères maximum !";
					} else if (strlen($_POST['mdp-add']) > 255){
						echo "Le mot de passe recquiert 255 caractères maximum !";
					}

					$newUser = new User([
						'name_admin' => htmlspecialchars($_POST['pseudo-add']),
						'pwd_admin' => password_hash(htmlspecialchars($_POST['mdp-add']), PASSWORD_DEFAULT)
					]);

					$userManager = new UserManager();
					$add_User = $userManager->add($newUser);
					header('Location: admin.php?page=adminUsersView'); 
				} else {
					$error =  "Tous les champs doivent être complétés !";
				}
			}
		} 
		require 'view/back/adminUsersView.php';
	}

	// afficher data d'un user selon son id sur la page update
	public static function getUserId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getUserManager = new UserManager();
			$getUser = $getUserManager->getUser($id);
			require 'view/back/updateUsersView.php';
		} 
	}

	// update data d'un user
	public static function updateUser() {
		if(isset($_POST['update'])) {
			if (isset($_POST['pseudo-new'], $_POST['mdp-new'])) {
				$new_update_user = new User([
					'name_admin' => htmlspecialchars($_POST['pseudo-new']),
					'pwd_admin' => password_hash(htmlspecialchars($_POST['mdp-new']), PASSWORD_DEFAULT),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$new_update_manager = new UserManager();
				$update_user = $new_update_manager->update($new_update_user);
				header('Location: admin.php?page=adminUsersView');
			}
		}
	}


	/* CATEGORIES */
	
	public static function editCategory() {

		// afficher liste des catégories
		$newCat = new CategoryManager();
		$getCats = $newCat->getListCat();

		// ajouter une catégorie
		if(isset($_POST['send-cat'])) {
			$nameCat = htmlspecialchars($_POST['name-cat']);
			$descCat = htmlspecialchars($_POST['desc-cat']);

			if (!empty($_FILES)) {
				$file_name = $_FILES['img-cat']['name'];
				$file_tmp_name = $_FILES['img-cat']['tmp_name'];
				$extension = strrchr($file_name, '.'); 
				$taille_fichier = filesize($file_tmp_name);
				$file_destination = 'public/img/' .$file_name;
				self::EXTENSION_VALID;
				self::POIDS_IMG_MAX;

				if ($taille_fichier > self::POIDS_IMG_MAX) {
					$error = "Vous avez dépassé la taille de fichier autorisée";
				}

				if(strlen($_POST['name-cat']) > 13){
					echo "Le nom recquiert 13 caractères maximum !";
				} else if (strlen($_POST['desc-cat']) > 450){
					echo "La description recquiert 450 caractères maximum !";
				}
				
				if(!empty($_POST['name-cat']) AND !empty($_POST['desc-cat']) AND !empty($_FILES['img-cat'])) {
					if(in_array($extension, self::EXTENSION_VALID)) {
						if(move_uploaded_file($file_tmp_name, $file_destination)) {

							$newAddCat = new Category ([
									'name_cat' => $nameCat,
									'description_cat' => $descCat,
									'img_cat' => $file_destination
								]);
								
								$newAddManager = new CategoryManager();
								$addCat = $newAddManager->add($newAddCat);
								header('Location: admin.php?page=adminCategoryView');
								exit();
						} else {
							$error = "Une erreur est survenue lors de l'envoi du fichier !";
						} 	
					} else {
						$error = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
					}
				} else {
					$error = "Veuillez renseigner tous les champs";
				}
			}
		} 
		require 'view/back/adminCategoryView.php';
	}

	// afficher data d'une cat selon son id sur la page update
	public static function getCatId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getCatManager = new CategoryManager();
			$getCatsId = $getCatManager->getCat($id);
			require 'view/back/updateCategoryView.php';
		} 
	}

	// update data d'une catégorie 
	public static function updateCat() {
		if(isset($_POST['update'])) {
			if (isset($_POST['cat-new'], $_POST['desc-new'])) {

				if(strlen($_POST['cat-new']) > 13){
					echo "Le nom recquiert 13 caractères maximum !";
				} else if (strlen($_POST['desc-new']) > 450){
					echo "La description recquiert 450 caractères maximum !";
				}

				$newCat = new Category([
					'name_cat' => htmlspecialchars($_POST['cat-new']),
					'description_cat' => htmlspecialchars($_POST['desc-new']),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$newCatManager = new CategoryManager();
				$updateCat = $newCatManager->update($newCat);
				header('Location: admin.php?page=adminCategoryView');
			}
		}
	}


	/* ARTICLES */

	public static function editArticle() {

		// afficher la liste de tous les articles
		$newArt = new ArticleManager();
		$getArts = $newArt->getArts();
	
		// afficher liste catégories pour associer l'article
		$newCat = new CategoryManager();
		$getCats = $newCat->getListCat();

		// ajouter un nouvel article
		if(isset($_POST['send-art'])) {
			
			$nbLignes = count($_FILES['images']['name']);

			for($i=0 ; $i<=$nbLignes-1 ; $i++) {
				$file_name = $_FILES['images']['name'][$i];
				$file_tmp_name = $_FILES['images']['tmp_name'][$i];
				$extension = strrchr($file_name, '.');
				$taille_fichier = filesize($file_tmp_name);
				$file_destination = 'public/img/' .$file_name;
				self::EXTENSION_VALID;
                self::POIDS_IMG_MAX;
			}

			if ($taille_fichier > self::POIDS_IMG_MAX) {
				$error = "Vous avez dépassé la taille de fichier autorisée";
			}

			$designation = htmlspecialchars($_POST['designation']);
			$imgBig = $_FILES['images']['name'][0];
			$title = htmlspecialchars($_POST['title_desc']);
			$description = htmlspecialchars($_POST['description_art']);
			$imgArt1 = $_FILES['images']['name'][1];
            $idCategories = htmlspecialchars($_POST['id_categories']);

			if (!empty($designation) AND !empty($imgBig) AND !empty($title) AND !empty($description) AND !empty($imgArt1) AND !empty($idCategories)) {
				if(in_array($extension, self::EXTENSION_VALID)) {
					if(move_uploaded_file($file_tmp_name, $file_destination)) {

							$newAddArt = new Article ([
								'designation' => $designation,
								'img_big' => 'img/public/'.$imgBig,
								'title_desc' => $title,
								'description_art' => $description,
								'img_art_1' => $file_destination,
								'id_categories' => $idCategories
                            ]);
                            
							$newAddManager = new ArticleManager();
							$addArticle = $newAddManager->add($newAddArt);
							
							header('Location: admin.php?page=adminArticlesView');
							exit();
					} else {
						$error = "Une erreur est survenue lors de l'envoi du fichier !";
					}
				} else {
					$error = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
				}
			} else {
				$error = "Veuillez remplir tous les champs !";
			}
		}
		require 'view/back/adminArticlesView.php';
	}

	// afficher data d'un article selon son id sur la page update
	public static function getArtId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getArtManager = new ArticleManager();
			$getArtId = $getArtManager->getArt($id);
			require 'view/back/updateArticlesView.php';
		} 
	}

	// update data d'un article
	public static function updateArt() {
		if(isset($_POST['update'])) {
			if (isset($_POST['designation_new'], $_POST['title_desc_new'], $_POST['desc_art_new'])) {
				
				$newArticle = new Article([
					'designation' => htmlspecialchars($_POST['designation_new']),
					'title_desc' => htmlspecialchars($_POST['title_desc_new']),
					'description_art' => htmlspecialchars($_POST['desc_art_new']),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$newArtManager = new ArticleManager();
				$updateArticle = $newArtManager->update($newArticle);
				header('Location: admin.php?page=adminArticlesView');
				exit();
			}
		}
	}


	/* PAGE NEWSLETTER */

	// afficher liste des emails inscrits depuis newsletter
	public static function getListEmails() {
		$newsletter = new NewsletterManager();
		$getEmails = $newsletter->getListEmail();
		require 'view/back/adminNewsletterView.php';
	}

	// exporter liste des emails dans un fichier csv
	public static function exportEmails() {
		$newsletter = new NewsletterManager();
		$getEmails = $newsletter->getListEmail();

		if (isset($_POST['export_emails'])) {
			header('Content-Type: text/csv;');
			header('Content-Disposition: attachment;filename="export_emails.csv"');

			foreach($getEmails as $getEmail) {
				$email = $getEmail->email();
				$date = $getEmail->dateInscription();

				$datas[] = array(
					'email' => $email,
					'date_inscription' => $date
				);
			}
			
			$delimiter = ';';
			$enclosure = '"';
			$fp = fopen('php://output', 'w');

			fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
			fputcsv($fp,array_keys($datas[0]),$delimiter,$enclosure);

			foreach($datas as $data){
				fputcsv($fp,$data,$delimiter,$enclosure);
			}
			fclose($fp);
		} 
	}

	// afficher data d'un email selon son id sur la page update
	public static function getEmailId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getEmailManager = new NewsletterManager();
			$getEmailId = $getEmailManager->getEmail($id);
			require 'view/back/updateNewsletterView.php';
		} 
	}

	// update data d'un email
	public static function updateEmail() {
		if(isset($_POST['update'])) {
			if (isset($_POST['email-new'])) {
				$newEmail = new Newsletter([
					'email' => htmlspecialchars($_POST['email-new']),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$newEmailManager = new NewsletterManager();
				$updateEmail = $newEmailManager->update($newEmail);
				header('Location: admin.php?page=adminNewsletterView'); 
				exit();
			}
		}
	}


	/* PAGE DELETE */

	public static function delete() {
		if (isset($_POST['delete_cat'])) {
			$newDelCat = new Category([
				'id' => htmlspecialchars($_GET['id'])
			]);

			$newDelManager = new CategoryManager();
			$delCat = $newDelManager->delete($newDelCat);
			header('Location: admin.php?page=adminCategoryView');
		}

		if (isset($_POST['delete_user'])) {
			$newDelUser = new User([
				'id' => htmlspecialchars($_GET['id'])
			]);

			$newDelManager = new UserManager();
			$delUser = $newDelManager->delete($newDelUser);
			header('Location: admin.php?page=adminUsersView');
		}

		if (isset($_POST['delete_art'])) {
			$newDelArt = new Article([
				'id' => htmlspecialchars($_GET['id'])
			]);

			$newDelManager = new ArticleManager();
			$delArt = $newDelManager->delete($newDelArt);
			header('Location: admin.php?page=adminArticlesView');
		}

		if (isset($_POST['delete_email'])) {
			$newDelArt = new Newsletter([
				'id' => htmlspecialchars($_GET['id'])
			]);

			$newDelManager = new NewsletterManager();
			$delArt = $newDelManager->delete($newDelArt);
			header('Location: admin.php?page=adminNewsletterView');
		}
	}
	

}