<?php
require_once 'Database.php';

class UserManager {

    public function add(User $users) {
        $db = Database::getPDO()->prepare('INSERT INTO users(name_admin, pwd_admin) VALUES (:name_admin, :pwd_admin)');
        
        $db->bindValue(':name_admin', $users->nameAdmin(), PDO::PARAM_STR);
        $db->bindValue(':pwd_admin', $users->pwdAdmin());
        $db->execute();
    }

    public function getListUsers() {
        $listusers = [];
        $db = Database::getPDO()->query('SELECT * FROM users');

        while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
            $listusers[] = new User($donnees);
        }

        return $listusers;
    }

    public function getUser($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM users WHERE id=' .$id);

        $db->execute(array($id));
        $donnees = $db->fetch(PDO::FETCH_ASSOC);

        return new User($donnees);
    }

    public function update(User $users) {
        $db = Database::getPDO()->prepare('UPDATE users SET name_admin = :name_admin, pwd_admin = :pwd_admin WHERE id = :id');

		$db->bindValue(':name_admin', $users->nameAdmin());
		$db->bindValue(':pwd_admin', $users->pwdAdmin());
		$db->bindValue(':id', $users->id());
		$db->execute();
    }

    public function delete(User $users) {
        $db = Database::getPDO()->prepare('DELETE FROM users WHERE id =' .$users->id());

		$db->bindValue(':id', $users->id());
		$db->bindValue(':name_admin', $users->nameAdmin());
		$db->bindValue(':pwd_admin', $users->pwdAdmin());
		$db->execute();
    }

    public function logUser($nameAdmin) {
        $db = Database::getPDO()->prepare('SELECT * FROM users WHERE name_admin = :name_admin');
		$db->execute(array(
			':name_admin' => $nameAdmin
        ));
        
		$donnees = $db->fetch(PDO::FETCH_ASSOC);
		return new User($donnees);
    }

}