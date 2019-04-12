<?php
require_once 'Database.php';

class NewsletterManager {

    public function add(Newsletter $email) {
        $db = Database::getPDO()->prepare('INSERT INTO newsletter(email, date_inscription) VALUES(:email, NOW())'); 

		$db->bindValue(':email', $email->email());
		$db->execute();
    }

    public function getListEmail() {
        $emails = [];
		$db = Database::getPDO()->query('SELECT * FROM newsletter');

		while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
			$emails[] = new Newsletter($donnees);
		}
		return $emails;
    }

    public function getEmail($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM newsletter WHERE id =' .$id);

		$db->execute(array($id));
		$donnees = $db->fetch(PDO::FETCH_ASSOC);

		return new Newsletter($donnees);
    }

    public function update(Newsletter $email) {
        $db = Database::getPDO()->prepare('UPDATE newsletter SET email = :email WHERE id = :id');

		$db->bindValue(':email', $email->email());
		$db->bindValue(':id', $email->id());
		$db->execute();
    }

    public function delete(Newsletter $email) {
        $db = Database::getPDO()->prepare('DELETE FROM newsletter WHERE id =' .$email->id());

		$db->bindValue(':id', $email->id());
		$db->bindValue(':email', $email->email());
		$db->execute();
    }
}