<?php

class Contact {

    private $_id;
    private $_name_contact;
    private $_subject_contact;
    private $_email_contract;
    private $_msg_contact;

    public function __construct($donnees) {
        if(!empty($donnees)) {
            $this->hydrate($donnees);
        } else {
            var_dump('Problème constructeur hydrate<br/>');
        }
    }

    public function hydrate(array $donnees) {
        foreach($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // GETTERS
    public function id() { return $this->_id; }
    public function nameContact() { return $this->_name_contact; }
    public function subjectContact() { return $this->_subject_contact; }
    public function emailContact() { return $this->_email_contact; }
    public function msgContact() { return $this->_msg_contact; }


    // SETTERS
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setName_contact($nameContact) {
        if (is_string($nameContact)) {
            $this->_name_contact = $nameContact;
        }
    }

    public function setSubject_contact($subjectContact) {
        if (is_string($subjectContact)) {
            $this->_subject_contact = $subjectContact;
        }
    }

    public function setEmail_contact($emailContact) {
        if (is_string($emailContact)) {
            $this->_email_contact = $emailContact;
        }
    }

    public function setMsg_contact($msgContact) {
        if (is_string($msgContact)) {
            $this->_msg_contact = $msgContact;
        }
    }
}