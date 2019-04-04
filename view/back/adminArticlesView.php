<?php $css='public/adminedit.css' ?>
<?php $title='Back Office - Astier de Villatte' ?>


<?php ob_start(); ?>
    <h1>Articles</h1>

	<form method="post" enctype="multipart/form-data">
        <p>
            <label for="designation">Designation</label>
            <input type="text" name="designation" maxlength="10"/>
        </p>
        <p>
            <label for="title_desc">Title</label>
            <input type="text" name="title_desc" maxlength="25"/>
        </p>
        <p>
            <label for="description_art">Description</label>
            <input type="text" name="description_art" maxlength="200"/>
        </p>
        <p>
            <label for="volume">Volume</label>
            <input type="text" name="volume" maxlength="3"/>
        </p>
        <p>
            <label for="prix">Prix</label>
            <input type="text" name="prix" maxlength="3"/>
        </p>
        <p>
            <label for="bloc_01">Bloc 01</label>
            <input type="text" name="bloc_01" maxlength="10"/>
        </p>
        <p>
            <label for="bloc_02">Bloc 02</label>
            <input type="text" name="bloc_02" maxlength="10"/>
        </p>
        <p>
            <label for="bloc_03">Bloc 03</label>
            <input type="text" name="bloc_03" maxlength="10"/>
        </p>
        <input type="hidden" name="MAX_FILE_SIZE"/>
        <p>Img big <input type="file" name="img_big"/></p>
        <p>Img tous les articles <input type="file" name="img_art_1"/></p>
        <p>Img page article <input type="file" name="img_art_2"/></p>

        <p>
            <select name="categories_id">
                <option>Choisissez sa catégorie</option>
                <?php foreach($getCats as $choix_cat): ?>
                <option value="<?= $choix_cat->id(); ?>"><?= $choix_cat->nameCat(); ?></option>
                <?php endforeach ?>
	        </select>
        </p>

        <input type="submit" name="send-cat" value="ADD" class ="button"/>
    </form>

    <h2>Liste des articles :</h2>
	<table>
		<?php foreach($getArts as $getArt): ?>
		<tr>
			<td><label for="id"><?= $getArt->designation(); ?></label></td>
			<td>
				<a href="admin.php?page=updateArticlesView&id=<?=$getArt->id();?>"><input type="submit" name="update" value="update" class="button-tab"></a>
			</td>
			<td>
				<form method="post" action="admin.php?page=delete&id=<?=$getArt->id();?>" >
					<input type="submit" name="delete_art" value="delete" class="button-tab"/>
				</form>
			</td>
		</tr>
		<?php endforeach ?>
	</table>


<?php $content = ob_get_clean(); ?>
<?php require ('template/templateAdmin.php') ?>
