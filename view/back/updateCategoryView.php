<?php $css='public/adminedit.css' ?>
<?php $title='Update Category - BO Astier de Villatte' ?>

<?php ob_start(); ?>
	<div class="container_flex">
		<div class="create">
			<form method="post" enctype="multipart/form-data">
				<p class=titre>Modifier la catégorie</p>
				<p>
					<label for="name-cat">Nom de la catégorie <span class="length"> (max 13 caractères)</span></label>
					<br/><input type="text" name="cat-new" id="nom" maxlength="13" value="<?= $getCatsId->nameCat(); ?>"/>
				</p>
				<p>
					<label for="desc-cat">Description <span class="length"> (max 450 caractères)</span></label>
					<br/><textarea name="desc-new" id="nom" cols="70" rows="15" maxlength="450" ><?= $getCatsId->descriptionCat(); ?></textarea>
				</p>
				<input type="submit" name="update" value="Modifier" class ="button_add"/>
			</form> 
		</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
