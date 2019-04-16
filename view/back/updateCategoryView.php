<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>

	<div class="container_flex">
		<div class="create">
			<form method="post" enctype="multipart/form-data">
				<p class=titre>Modifier la catégorie</p>
				<p>
					<label for="name-cat">Catégorie</label>
					<br/><input type="text" name="cat-new" id="nom" maxlength="10" value="<?= $getCats->nameCat(); ?>"/>
				</p>
				<p>
					<label for="desc-cat">Description</label>
					<br/><textarea name="desc-new" id="nom" cols="70" rows="15" maxlength="200" ><?= $getCats->descriptionCat(); ?></textarea>
				</p>
				<input type="submit" name="update" value="Modifier" class ="button_add"/>
			</form> 
		</div>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
