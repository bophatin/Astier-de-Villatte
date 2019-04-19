<?php $css='public/adminedit.css' ?>
<?php $title='Update Article - BO Astier de Villatte' ?>

<?php ob_start(); ?>
    <div class="container_flex">
        <div class="create">
            <form method="post" class="form" enctype="multipart/form-data">
                <p class=titre>Modifier l'article</p>
                <p>
                    <label for="designation">Designation <span class="length"> (max 30 caractères)</span></label>
                    <input type="text" name="designation_new" id="nom" maxlength="30" value="<?= $getArtId->designation(); ?>"/>
                </p>
                <p>
                    <label for="title_desc">Titre de la description <span class="length"> (max 50 caractères)</span></label>
                    <input type="text" name="title_desc_new" id="nom" maxlength="" value="<?= $getArtId->titleDesc(); ?>"/>
                </p>
                <p>
                    <label for="description_art">Description</label>
                    <br/><textarea type="text" name="desc_art_new" id="nom" cols="70" rows="15" maxlength="1050"><?= $getArtId->descriptionArt(); ?></textarea>
                </p>
                <input type="submit" name="update" value="modifier" class ="button_add"/>
            </form> 
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
