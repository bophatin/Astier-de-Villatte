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
						header('Location:admin.php?page=adminEditView');
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

    public static function getUsers() {
        $newUser = new UserManager();
		$getUser = $newUser->getListUsers();
		require 'view/back/adminUsersView.php';
	}

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


	/* CATEGORIES */

	public static function addNewCat() {

		if(isset($_POST['send-cat'])) {

			var_dump($_FILES);
			var_dump($_FILES['img-cat']['error']);

			if (isset($_POST['name-cat'], $_POST['desc-cat'])) {
				if(!empty($_POST['name-cat']) AND !empty($_POST['desc-cat'])) {
					$nameCat = htmlspecialchars($_POST['name-cat']);
					$descCat = htmlspecialchars($_POST['desc-cat']);
				}
			}

			if (!empty($_FILES)) {
				$file_name = $_FILES['img-cat']['name'];
				$extension = strrchr($file_name, '.'); 
				$extensions_ok = array('.png', '.gif', '.jpg', '.jpeg');
				$file_tmp_name = $_FILES['img-cat']['tmp_name'];
				$file_destination = 'public/img/' .$file_name;

				if(in_array($extension, $extensions_ok)) {
					if(move_uploaded_file($file_tmp_name, $file_destination)) {
						echo "Fichier envoyé avec succès !";
					} else {
						echo "Une erreur est survenue lors de l'envoi du fichier !";
					}
				} else {
					echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
				}
			}

			if(!empty($_POST['name-cat']) AND !empty($_POST['desc-cat']) AND !empty($_FILES['img-cat'])) {
				$newAddCat = new Category ([
					'name_cat' => $nameCat,
					'description_cat' => $descCat,
					'img_cat' => $file_destination
				]);

				$newAddManager = new CategoryManager();
				$addCat = $newAddManager->add($newAddCat);
			}
		} 
		require 'view/back/adminCategoryView.php';
	}

	

}