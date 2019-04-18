<?php
require_once 'Database.php';

class ArticleManager {

    public function add(Article $art) {
        $db = Database::getPDO()->prepare('INSERT INTO articles(designation, img_big, title_desc, description_art, img_art_1, id_categories) VALUES (:designation, :img_big, :title_desc, :description_art, :img_art_1, :id_categories)');
        
        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':img_big', $art->imgBig());
        $db->bindValue(':title_desc', $art->titleDesc());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':img_art_1', $art->imgArt1());
        $db->bindValue(':id_categories', $art->idCategories());

        $db->execute();
    }

    public function getListArt($idcategories) {
        $art = [];
        $db = Database::getPDO()->query('SELECT * FROM articles WHERE id_categories =' .$idcategories);

        while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
            $art[] = new Article($donnees);
        }
        return $art;
    }

    public function getSlider() {
        $art = [];
        $db = Database::getPDO()->query('SELECT * FROM articles WHERE id_categories = 3');
        while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
            $art[] = new Article($donnees);
        }
        return $art;
    }
    
    public function getArt($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM articles WHERE id =' .$id);

        $db->execute(array($id));
        $donnees = $db->fetch(PDO::FETCH_ASSOC);
        return new Article($donnees);
    }

    public function getArts() {
        $arts = [];
        $db = Database::getPDO()->query('SELECT * FROM articles');

        while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
            $arts[] = new Article($donnees);
        }
        return  $arts;
    }

    public function update(Article $art) {
        $db = Database::getPDO()->prepare('UPDATE articles SET designation = :designation, title_desc = :title_desc, description_art = :description_art WHERE id = :id');

        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':title_desc', $art->titleDesc());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':id', $art->id());

        $db->execute();
    }

    public function delete(Article $art) {
        $db = Database::getPDO()->prepare('DELETE FROM articles WHERE id =' .$art->id());

        $db->bindValue(':id', $art->id());
        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':img_big', $art->imgBig());
        $db->bindValue(':title_desc', $art->titleDesc());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':img_art_1', $art->imgArt1());
        $db->bindValue(':id_categories', $art->idCategories());
        
        $db->execute();
    }
}