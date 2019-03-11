<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Category</h1>

    <form method="post" enctype="multipart/form-data">
        <label for="name-cat">New category</label>
        <input type="text" name="name-cat"/>
        <label for="desc-cat">Description</label>
        <textarea type="text" name="desc-cat"></textarea>
        <label for="img-cat">Image</label>
        <input type="hidden" name="MAX_FILE_SIZE"/>
        <input type="file" name="img-cat"/>
        <input type="submit" name="send-cat" value="ADD" class ="button"/>
    </form> 

    <div class="container-modify">
		<p class="title">Liste des catégories :</p>
		<div class="background-form">
			<table>
			    <?php foreach($getCats as $getCat): ?>
				<tr>
					<td><label for="id"><?= $getCat->nameCat(); ?></label></td>
					<td>
						<a href="admin.php?page=action&id=<?=$getCat->id();?>"><input type="submit" name="update" value="update" class="button-tab"></a>
					</td>
					<td>
						<form method="post" action="admin.php?page=delete&id=<?=$getCat->id();?>" >
							<input type="submit" name="delete_cat" value="delete" class="button-tab"/>
						</form>
					</td>
				</tr>
			    <?php endforeach ?>
			</table>
		</div>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
