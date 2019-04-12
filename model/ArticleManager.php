<?php
require_once 'Database.php';

class ArticleManager {

    public function add(Article $art) {
        $db = Database::getPDO()->prepare('INSERT INTO articles(designation, img_big, title_desc, description_art, volume, prix, img_art_1, img_art_2, bloc_01, bloc_02, bloc_03, id_categories) VALUES (:designation, :title_desc, :description_art, :volume, :prix, :img_art_1, :img_art_2, :bloc_01, :bloc_02, :bloc_03, :categories_id)');
        
        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':img_big', $art->imgBig());
        $db->bindValue(':title_desc', $art->titleDesc());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':volume', $art->volume());
        $db->bindValue(':prix', $art->prix());
        $db->bindValue(':img_big', $art->imgArt1());
        $db->bindValue(':img_big', $art->imgArt2());
        $db->bindValue(':bloc_01', $art->bloc01());
        $db->bindValue(':bloc_02', $art->bloc02());
        $db->bindValue(':bloc_03', $art->bloc03());
        $db->bindValue(':categories_id', $art->idCategories());

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
        $db = Database::getPDO()->prepare('UPDATE articles SET designation = :designation, title_desc = :title_desc, description_art = :description_art, volume = :volume, prix = :prix, bloc_01 = :bloc_01, bloc_02 = :bloc_02, bloc_03 = :bloc_03 WHERE id = :id');

        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':title_desc', $art->titleDesc());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':volume', $art->volume());
        $db->bindValue(':prix', $art->prix());
        $db->bindValue(':bloc_01', $art->bloc01());
        $db->bindValue(':bloc_02', $art->bloc02());
        $db->bindValue(':bloc_03', $art->bloc03());
        $db->bindValue(':id', $art->id());

        $db->execute();
    }
}