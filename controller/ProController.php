<?php

class ProController {

    public static function logPro() {
		
		if (isset($_POST['username'], $_POST['password'])) {
			if(!empty($_POST['username']) AND !empty($_POST['password'])) {
                    
				$username = htmlspecialchars($_POST['username']);
				$password = htmlspecialchars($_POST['password']);
			
				$us = new User([
					'name_admin' => $username,
					'pwd_admin' => $password
                ]);
				
				$um = new UserManager();
				$user = $um->logUser($username);
				$mdp = $user->pwdAdmin();
				
				$validPwd = password_verify($password, $mdp);

				if($validPwd) {
					session_start();
					$_SESSION['username'] = $_POST['username'];
					echo "Success";
				} else {
					echo "Failed";
				}
			} else {
				echo "Failed";
			}
		} else {
			require 'view/404View.php';
		}
		/*require 'view/proIndexView.php';*/
	}

    public static function getUsers() {
        $ab = new UserManager();
        $cd = $ab ->getListUsers();
		var_dump($cd);
		require 'view/proIndexView.php';
    }

}


