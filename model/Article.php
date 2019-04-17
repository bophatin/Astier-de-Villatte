<?php

class Article {

    private $_id;
    private $_designation;
    private $_title_desc;
    private $_img_big;
    private $_description_art;
    private $_img_art_1;
    private $_id_categories;

    public function __construct($donnees) {
        if(!empty($donnees)) {
            $this->hydrate($donnees);
        } else {
            
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
    public function designation() { return $this->_designation; }
    public function imgBig() { return $this->_img_big; }
    public function descriptionArt() { return $this->_description_art; }
    public function imgArt1() { return $this->_img_art_1; }
    public function idCategories() { return $this->_id_categories; }
    public function titleDesc() { return $this->_title_desc; }

    // SETTERS
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setDesignation($designation) {
        if (is_string($designation)) {
            $this->_designation = $designation;
        }
    }

    public function setImg_big($imgBig) {
        if (is_string($imgBig)) {
            $this->_img_big = $imgBig;
        }
    }

    public function setDescription_art($descriptionArt) {
        if (is_string($descriptionArt)) {
            $this->_description_art = $descriptionArt;
        }
    }

    public function setImg_art_1($imgArt1) {
        if (is_string($imgArt1)) {
            $this->_img_art_1 = $imgArt1;
        }
    } 

    public function setId_categories($idcategories) {
        $idcategories = (int) $idcategories;
        if ($idcategories > 0) {
            $this->_id_categories = $idcategories;
        }
    }

    public function setTitle_desc($titleDesc) {
        if (is_string($titleDesc)) {
            $this->_title_desc = $titleDesc;
        }
    }
}