<?php
require_once 'Database.php';

class ContactManager {

    public function add(Contact $contact) {
        $db = Database::getPDO()->prepare('INSERT INTO contact(name_contact, subject_contact, email_contact, msg_contact) VALUES(:name_contact, :subject_email, :email_contact, :msg_contact'); 

        $db->bindValue(':name_contact', $contact->nameContact());
        $db->bindValue(':subject_contact', $contact->subjectContact());
        $db->bindValue(':email_contact', $contact->emailContact());
        $db->bindValue(':msg_contact', $contact->msgContact());
		$db->execute();
    }

    public function getListContact() {
        $contacts = [];
		$db = Database::getPDO()->query('SELECT * FROM contact');

		while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
			$contacts[] = new Newsletter($donnees);
		}
		return $contacts;
    }

    public function getContact($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM contact WHERE id =' .$id);

		$db->execute(array($id));
		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		return new Contact($donnees);
    }

    public function update(Contact $contact) {
        $db = Database::getPDO()->prepare('UPDATE contact SET email_contact = :email_contact WHERE id = :id');

		$db->bindValue(':email_contact', $contact->emailContact());
		$db->bindValue(':id', $contact->id());
		$db->execute();
    }

    public function delete(Contact $contact) {
        $db = Database::getPDO()->prepare('DELETE FROM contact WHERE id =' .$contact->id());

        $db->bindValue(':id', $contact->id());
        $db->bindValue(':name_contact', $contact->nameContact());
        $db->bindValue(':subject_contact', $contact->subjectContact());
        $db->bindValue(':email_contact', $contact->emailContact());
        $db->bindValue(':msg_contact', $contact->msgContact());
		$db->execute();
    }
}