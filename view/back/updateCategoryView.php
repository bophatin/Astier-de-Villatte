<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Update Category</h1>

	<form method="post" class="form">
		<p>
			<label for="name-cat">Catégorie</label>
			<input type="text" name="cat-new" id="nom" value="<?= $getCats->nameCat(); ?>"/>
		</p>
		<p>
			<label for="desc-cat">Description</label>
			<textarea name="desc-new" id="nom" cols="70" rows="15"><?= $getCats->descriptionCat(); ?></textarea>
		</p>
		<input type="submit" name="update" value="UPDATE" class ="button"/>
	</form> 



<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
