<?php $css='public/adminedit.css' ?>
<?php $title='Back Office - Astier de Villatte' ?>


<?php ob_start(); ?>
    <div class="container_flex">

        <div class="create">
            <p class=titre>Créer un article</p>

            <form method="post" enctype="multipart/form-data">
                <p>
                    <label for="designation">Designation</label>
                    <br/><input type="text" name="designation" maxlength="30"/>
                </p>
                <p>
                    <label for="title_desc">Title</label>
                    <br/><input type="text" name="title_desc"/>
                </p>
                <p>
                    <label for="description_art">Description</label>
                    <br/><textarea type="text" name="description_art" cols="70" rows="15"></textarea>
                </p>
                <input type="hidden" name="MAX_FILE_SIZE"/>
                <p><label>Img big</label><input type="file" name="img_big" multiple/></p>
                <p><label>Img tous les articles</label><input type="file" name="img_art_1" multiple/></p></label>

                <p>
                    <select name="categories_id">
                        <option>CATEGORIE ASSOCIÉE</option>
                        <?php foreach($getCats as $choix_cat): ?>
                        <option value="<?= $choix_cat->id(); ?>"><?= $choix_cat->nameCat(); ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <input type="submit" name="send-art" value="creer" class ="button_add"/>
            </form>
        </div>

        <div class="update_delete">
            <p class=titre>Liste des articles</p>
            <table>
                <?php foreach($getArts as $getArt): ?>
                <tr>
                    <td><label for="id" class="lab_up_del"><?= $getArt->designation(); ?></label></td>
                    <td>
                        <a href="admin.php?page=updateArticlesView&id=<?=$getArt->id();?>"><input type="submit" name="update" value="modifier" class="button"></a>
                    </td>
                    <td>
                        <form method="post" action="admin.php?page=delete&id=<?=$getArt->id();?>" >
                            <input type="submit" name="delete_art" value="supprimer" class="button_delete"/>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require ('template/templateAdmin.php') ?>
