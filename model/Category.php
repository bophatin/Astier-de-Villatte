<?php

class Category {
    
    private $_id;
    private $_name_cat;

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

    // SETTERS
    public function id() { return $this->_id; }
    public function nameCat() { return $this->_name_cat; }

    // GETTERS
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setName_cat($nameCat) {
        if (is_string($nameCat)) {
            $this->_name_cat = $nameCat;
        }
    }

}