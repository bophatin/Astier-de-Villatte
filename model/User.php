<?php

class User {
    
    private $_id;
    private $_name_admin;
    private $_pwd_admin;

    public function __construct($donnees) {
        if(!empty($donnees)) {
            $this->hydrate($donnees);
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

    // SETTERS
    public function id() { return $this->_id; }
    public function nameAdmin() { return $this->_name_admin; }
    public function pwdAdmin() { return $this->_pwd_admin; }

    // GETTERS
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setName_admin($nameAdmin) {
        if (is_string($nameAdmin)) {
            $this->_name_admin = $nameAdmin;
        }
    }

    public function setPwd_admin($pwdAdmin) {
        if (is_string($pwdAdmin)) {
            $this->_pwd_admin = $pwdAdmin;
        }
    }
}