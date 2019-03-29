<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Update Article</h1>

		<form method="post" class="form">
            <p>
                <label for="designation">Designation</label>
                <input type="text" name="designation_new" id="nom" value="<?= $getArts->designation(); ?>"/>
            </p>
            <p>
                <label for="title_desc">Description</label>
                <input type="text" name="title_desc_new" id="nom" value="<?= $getArts->titleDesc(); ?>"/>
            </p>
            <p>
                <label for="description_art">Description</label>
                <textarea type="text" name="desc_art_new" id="nom" cols="70" rows="15"><?= $getArts->descriptionArt(); ?></textarea>
            </p>
            <p>
                <label for="prix">Prix</label>
                <input type="text" name="prix_new" id="nom" value="<?= $getArts->prix(); ?>" />
            </p>
            <p>
                <label for="bloc_01">Bloc 01</label>
                <input type="text" name="bloc_01_new" value="<?= $getArts->bloc01(); ?>"/>
            </p>
            <p>
                <label for="bloc_02">Bloc 02</label>
                <input type="text" name="bloc_02_new" value="<?= $getArts->bloc02(); ?>"/>
            </p>
            <p>
                <label for="bloc_03">Bloc 03</label>
                <input type="text" name="bloc_03_new" value="<?= $getArts->bloc03(); ?>"/>
            </p>
            <p>
                <label for="volume">Volume</label>
                <input type="text" name="volume_new" value="<?= $getArts->volume(); ?>" />
            </p>
			<input type="submit" name="update" value="UPDATE" class ="button"/>
        </form> 
        
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
