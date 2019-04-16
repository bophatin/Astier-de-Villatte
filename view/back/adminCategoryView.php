<?php $css='public/adminedit.css' ?>
<?php $title='Category - BO Astier de Villatte' ?>


<?php ob_start(); ?>
	<div class="container_flex">

		<div class="create">
			<form method="post" enctype="multipart/form-data">
				<p class=titre>Créer une catégorie</p>
				<p>
					<label for="name-cat">Nom de la catégorie</label>
					<br/><input type="text" name="name-cat" maxlength="10"/>
				</p>
				<p>
					<label for="desc-cat">Description</label>
					<br/><textarea type="text" name="desc-cat" cols="50" rows="10" maxlength="200"></textarea>
				</p>
				<p>
					<label for="img-cat">Image (taille max 100Mo)</label>
					<input type="hidden" name="MAX_FILE_SIZE"/>
					<input type="file" name="img-cat"/>
				</p>
				<input type="submit" name="send-cat" value="creer" class ="button_add"/>
			</form> 
		</div>

	<div class="update_delete">
		<p class="titre">Liste des catégories</p>
		<table>
			<?php foreach($getCats as $getCat): ?>
			<tr>
				<td><label for="id" class="lab_up_del"><?= $getCat->nameCat(); ?></label></td>
				<td>
					<a href="admin.php?page=updateCategoryView&id=<?=$getCat->id();?>"><input type="submit" name="update" value="modifier" class="button"></a>
				</td>
				<td>
					<form method="post" action="admin.php?page=delete&id=<?=$getCat->id();?>" >
						<input type="submit" name="delete_cat" value="supprimer" class="button_delete"/>
					</form>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>

	</div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
