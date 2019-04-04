<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Update Article</h1>

		<form method="post" class="form">
            <p>
                <label for="designation">Designation</label>
                <input type="text" name="designation_new" id="nom" maxlength="10" value="<?= $getArts->designation(); ?>"/>
            </p>
            <p>
                <label for="title_desc">Description</label>
                <input type="text" name="title_desc_new" id="nom" maxlength="25" value="<?= $getArts->titleDesc(); ?>"/>
            </p>
            <p>
                <label for="description_art">Description</label>
                <textarea type="text" name="desc_art_new" id="nom" cols="70" rows="15" maxlength="200"><?= $getArts->descriptionArt(); ?></textarea>
            </p>
            <p>
                <label for="prix">Prix</label>
                <input type="text" name="prix_new" id="nom"  maxlength="3" value="<?= $getArts->prix(); ?>" />
            </p>
            <p>
                <label for="bloc_01">Bloc 01</label>
                <input type="text" name="bloc_01_new" maxlength="10" value="<?= $getArts->bloc01(); ?>"/>
            </p>
            <p>
                <label for="bloc_02">Bloc 02</label>
                <input type="text" name="bloc_02_new" maxlength="10" value="<?= $getArts->bloc02(); ?>"/>
            </p>
            <p>
                <label for="bloc_03">Bloc 03</label>
                <input type="text" name="bloc_03_new" maxlength="10" value="<?= $getArts->bloc03(); ?>"/>
            </p>
            <p>
                <label for="volume">Volume</label>
                <input type="text" name="volume_new"  maxlength="3" value="<?= $getArts->volume(); ?>" />
            </p>
			<input type="submit" name="update" value="UPDATE" class ="button"/>
        </form> 
        
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
