<?php
require_once 'Database.php';

class CategoryManager {

    public function add(Category $cat) {
        $db = Database::getPDO()->prepare('INSERT INTO categories(id, name_cat, description_cat, img_cat) VALUES (:id, :name_cat, :description_cat, :img_cat)');
        $db->bindValue(':id', $cat->id());
        $db->bindValue(':name_cat', $cat->nameCat());
        $db->bindValue(':description_cat', $cat->descriptionCat());
        $db->bindValue('img_cat', $cat->imgCat());
        $db->execute();
    }

    public function getListCat() {
        $cats = [];
        $db = Database::getPDO()->query('SELECT * FROM categories');

        while ($donnees = $db->fetch(PDO::FETCH_ASSOC)) {
            $cats[] = new Category($donnees);
        }
        return $cats;
    }

    public function getCat($id) {
        $db = Database::getPDO()->prepare('SELECT * FROM categories WHERE id=' .$id);
        $db->execute(array($id));
        $donnees = $db->fetch(PDO::FETCH_ASSOC);
        return new Category($donnees);
    }

    public function update(Category $cat) {
        $db = Database::getPDO()->prepare('UPDATE categories SET name_cat = :name_cat, description_cat = :description_cat WHERE id = :id');
        $db->bindValue(':name_cat', $cat->nameCat());
        $db->bindValue(':description_cat', $cat->descriptionCat());
        $db->bindValue(':id', $cat->id());
        $db->execute();
    }

    public function delete(Category $cat) {
        $db = Database::getPDO()->prepare('DELETE FROM categories WHERE id =' .$cat->id());
        $db->bindValue(':id', $cat->id());
        $db->bindValue(':name_cat', $cat->namecat());
        $db->execute();
    }

}
