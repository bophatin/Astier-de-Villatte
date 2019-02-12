<?php

class Form {

    private $_id;
    private $_email;

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
    public function email() { return $this->_email; }

    // SETTERS
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setEmail($email) {
        if (is_string($email)) {
            $this->_email = $email;
        }
    }
}