<?php
require_once 'Database.php';

class ArticleManager {

    public function add(Article $art) {
        $db = Database::getPDO()->prepare('INSERT INTO articles(designation, img_big, description_art, volume, prix, img_art_1, img_art_2, bloc_01, bloc_02, bloc_03, stock) VALUES (:designation, :img_big, :description_art, :volume, :prix, :img_art_1, :img_art_2, :bloc_01, :bloc_02, :bloc_03, :stock, :categories_id)');
        
        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':im_big', $art->imgBig());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':volume', $art->volume());
        $db->bindValue(':prix', $art->prix());
        $db->bindValue(':img-Art_1', $art->imgArt1());
        $db->bindValue(':img-Art_1', $art->imgArt2());
        $db->bindValue(':bloc_01', $art->bloc01());
        $db->bindValue(':bloc_02', $art->bloc02());
        $db->bindValue(':bloc_03', $art->bloc03());
        $db->bindValue(':stock', $art->stock());
        $db->bindValue(':categories_id', $art->stock());

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
    
    public function getArt($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM articles WHERE id =' .$id);

        $db->execute(array($id));
        $donnees = $db->fetch(PDO::FETCH_ASSOC);
        return new Article($donnees);
    }

    public function update(Article $art) {
        $db = Database::getPDO()->prepare('UPDATE articles SET designation = :designation, img_big = :img_big, description_art = :description_art, volume = :volume, prix = :prix, img_art1 = :img_art_1, img_art_2 = :im_art_2, bloc_01 = :bloc_01, bloc_02 = :bloc_02, bloc_03 = :bloc_03, stock = :stock WHERE id = :id');

        $db->bindValue(':designation', $art->designation());
        $db->bindValue(':im_big', $art->imgBig());
        $db->bindValue(':description_art', $art->descriptionArt());
        $db->bindValue(':volume', $art->volume());
        $db->bindValue(':prix', $art->prix());
        $db->bindValue(':img-Art_1', $art->imgArt1());
        $db->bindValue(':img-Art_1', $art->imgArt2());
        $db->bindValue(':bloc_01', $art->bloc01());
        $db->bindValue(':bloc_02', $art->bloc02());
        $db->bindValue(':bloc_03', $art->bloc03());
        $db->bindValue(':stock', $art->stock());
        $db->bindValue(':id', $art->id());

        $db->execute();
    }
}