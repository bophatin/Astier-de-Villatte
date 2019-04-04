<?php

class AdminController {

	/* LOG */ 

    public static function logPro() {
		if(isset($_POST['submit'])) {
			if (isset($_POST['username'], $_POST['password'])) {
				if(!empty($_POST['username']) AND !empty($_POST['password'])) {
					$name = htmlspecialchars($_POST['username']);
					$pwd = htmlspecialchars($_POST['password']);
			
					$us = new User([
						'name_admin' => $name,
						'pwd_admin' => $pwd
					]);
				
					$um = new UserManager();
					$user = $um->logUser($name);
					
					$mdp = $user->pwdAdmin();
					$validPwd = password_verify($pwd, $mdp);
	
					if($validPwd) {
						session_start();
						$_SESSION['username'] = $_POST['username'];
						echo $_POST;
						header('Location:admin.php?page=adminArticlesView');
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

	// afficher liste des users
    public static function getUsers() {
        $newUser = new UserManager();
		$getUser = $newUser->getListUsers();
		require 'view/back/adminUsersView.php';
	}

	// ajouter un user
	public static function addUser() {
        if(isset($_POST['create'])) {
			if (isset($_POST['pseudo-add'], $_POST['mdp-add'])) {
				if (!empty($_POST['pseudo-add']) AND !empty($_POST['mdp-add'])) {

					$newUser = new User([
						'name_admin' => htmlspecialchars($_POST['pseudo-add']),
						'pwd_admin' => password_hash(htmlspecialchars($_POST['mdp-add']), PASSWORD_DEFAULT)
					]);

					$addUserManager = new UserManager();
					$addUser = $addUserManager->add($newUser);
					header('Location: admin.php?page=adminUsersView'); 
				} else {
					echo  "Tous les champs doivent être complétés !";
				}
			} 
		} 
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
				$newUpUser = new User([
					'name_admin' => htmlspecialchars($_POST['pseudo-new']),
					'pwd_admin' => password_hash(htmlspecialchars($_POST['mdp-new']), PASSWORD_DEFAULT),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$newUpUserManager = new UserManager();
				$UpdateUser = $newUpUserManager->update($newUpUser);
				header('Location: admin.php?page=adminUsersView'); 
			}
		}
	}


	/* CATEGORIES */

	// ajouter une nouvelle cat
	public static function addNewCat() {

		if(isset($_POST['send-cat'])) {

			$nameCat = htmlspecialchars($_POST['name-cat']);
			$descCat = htmlspecialchars($_POST['desc-cat']);

			if (!empty($_FILES)) {
				$file_name = $_FILES['img-cat']['name'];
				$extension = strrchr($file_name, '.'); 
				$extensions_ok = array('.png', '.gif', '.jpg', '.jpeg');
				$file_tmp_name = $_FILES['img-cat']['tmp_name'];
				$taille_max = 104857600; /* Equivaut à 100 Mo */
				$taille_fichier = filesize($file_tmp_name);
				$file_destination = 'public/img/' .$file_name;

				if ($taille_fichier > $taille_max) {
					echo "Vous avez dépassé la taille de fichier autorisée";
				}

				if(in_array($extension, $extensions_ok)) {
					if(move_uploaded_file($file_tmp_name, $file_destination)) {
						/*echo "Fichier envoyé avec succès !";*/

						if(!empty($_POST['name-cat']) AND !empty($_POST['desc-cat']) AND !empty($_FILES['img-cat'])) {

							$newAddCat = new Category ([
								'name_cat' => $nameCat,
								'description_cat' => $descCat,
								'img_cat' => $file_destination
							]);
						
							$newAddManager = new CategoryManager();
							$addCat = $newAddManager->add($newAddCat);
							header('Location: admin.php?page=adminCategoryView');
							exit();
						}
					} else {
						echo "Une erreur est survenue lors de l'envoi du fichier !";
					} 	
				} else {
					echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
				}
			}
		} 
	}

	// afficher liste des catégories
	public static function getCats() {
		$newCat = new CategoryManager();
		$getCats = $newCat->getListCat();
		require 'view/back/adminCategoryView.php';
	}

	// afficher data d'une cat selon son id sur la page update
	public static function getCatId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getCatManager = new CategoryManager();
			$getCats = $getCatManager->getCat($id);
			require 'view/back/updateCategoryView.php';
		} 
	}

	// update data d'une catégorie 
	public static function updateCat() {
		if(isset($_POST['update'])) {
			if (isset($_POST['cat-new'], $_POST['desc-new'])) {
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

	// ajouter un nouvel article
	public static function addArticle() {
       
	}

	public static function getListArt() {

		// afficher la liste des articles pour update ou delete
		$newArt = new ArticleManager();
		$getArts = $newArt->getArts();

		// afficher liste catégories pour associer l'article
		$newCat = new CategoryManager();
		$getCats = $newCat->getListCat();

		require 'view/back/adminArticlesView.php';
	}

	// afficher data d'un article selon son id sur la page update
	public static function getArtId() {
		if (isset($_GET['id'])) {
			$id = htmlspecialchars(($_GET['id']));

			$getArtManager = new ArticleManager();
			$getArts = $getArtManager->getArt($id);
			require 'view/back/updateArticlesView.php';
		} 
	}

	// update data d'un article
	public static function updateArt() {
		if(isset($_POST['update'])) {
			if (isset($_POST['designation_new'], $_POST['title_desc_new'], $_POST['desc_art_new'], $_POST['prix_new'], $_POST['bloc_01_new'], $_POST['bloc_02_new'], $_POST['bloc_03_new'], $_POST['volume_new'])) {
				$newArt = new Article([
					'designation' => htmlspecialchars($_POST['designation_new']),
					'title_desc' => htmlspecialchars($_POST['title_desc_new']),
					'description_art' => htmlspecialchars($_POST['desc_art_new']),
					'volume' => htmlspecialchars($_POST['volume_new']),
					'prix' => htmlspecialchars($_POST['prix_new']),
					'bloc_01' => htmlspecialchars($_POST['bloc_01_new']),
					'bloc_02' => htmlspecialchars($_POST['bloc_02_new']),
					'bloc_03' => htmlspecialchars($_POST['bloc_03_new']),
					'id' => htmlspecialchars($_GET['id'])
				]);

				$newArtManager = new ArticleManager();
				$updateCat = $newArtManager->update($newArt);
				header('Location: admin.php?page=adminArticlesView'); 
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

			$newDelManager = new ArticlerManager();
			$delArt = $newDelManager->delete($newDelArt);
			header('Location: admin.php?page=adminArticlesView');
		}
	}
	

}