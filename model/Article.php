<?php

class Article {

    private $_id;
    private $_designation;
    private $_img_big;
    private $_description_art;
    private $_prix;
    private $_img_art_1;
    private $_img_art_2;
    private $_stock;
    private $_bloc_01;
    private $_bloc_02;
    private $_bloc_03;
    private $_volume;
    private $_id_categories;

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
    public function designation() { return $this->_designation; }
    public function imgBig() { return $this->_img_big; }
    public function descriptionArt() { return $this->_description_art; }
    public function prix() { return $this->_prix; }
    public function imgArt1() { return $this->_img_art_1; }
    public function imgArt2() { return $this->_img_art_2; }
    public function stock() { return $this->_stock; }
    public function bloc01() { return $this->_bloc_01; }
    public function bloc02() { return $this->_bloc_02; }
    public function bloc03() { return $this->_bloc_03; }
    public function volume() { return $this->_volume; }
    public function idCatgories() { return $this->_id_categories; }

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

    public function setPrix($prix) {
        $prix = (int) $prix;
        if ($prix > 0) {
            $this->_prix = $prix;
        }
    }

    public function setImg_art_1($imgArt1) {
        if (is_string($imgArt1)) {
            $this->_img_art_1 = $imgArt1;
        }
    } 

    public function setImg_art_2($imgArt2) {
        if (is_string($imgArt2)) {
            $this->_img_art_2 = $imgArt2;
        }
    } 

    public function setStock($stock) {
        $stock = (int) $stock;
        if ($stock > 0) {
            $this->_stock = $stock;
        }
    }

    public function setBloc_01($bloc01) {
        if (is_string($bloc01)) {
            $this->_bloc_01 = $bloc01;
        }
    }

    public function setBloc_02($bloc02) {
        if (is_string($bloc02)) {
            $this->_bloc_02 = $bloc02;
        }
    }

    public function setBloc_03($bloc03) {
        if (is_string($bloc03)) {
            $this->_bloc_03 = $bloc03;
        }
    }

    public function setVolume($volume) {
        $volume = (int) $volume;
        if ($volume > 0) {
            $this->_volume = $volume;
        }
    }

    public function setId_categories($idcategories) {
        $idcategories = (int) $idcategories;
        if ($idcategories > 0) {
            $this->_id_categories = $idcategories;
        }
    }
}