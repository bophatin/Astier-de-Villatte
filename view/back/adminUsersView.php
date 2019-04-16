<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
	<div class="container_flex">

		<div class="create">
			<p class=titre>Créer un user</p>
			<form method="post" class="form">
				<p>
					<label for="pseudo">Pseudo</label>
					<br/><input type="text" name="pseudo-add" id="nom"/>
				</p>
				<p>
					<label for="password">Password</label>
					<br/><input type="password" name="mdp-add" id="mdp"/>
				</p>
				<input type="submit" name="create" value="creer" class="button_add"/>
			</form> 
		</div>

		<div class="update_delete">
			<p class=titre>Liste des users</p>
			<table>
				<?php foreach($getUser as $getUsers): ?>
				<tr>
					<td><label for="id" class="lab_up_del"><?= $getUsers->nameAdmin(); ?></label></td>
					<td>
						<a href="admin.php?page=updateUsersView&id=<?=$getUsers->id();?>"><input type="submit" name="update" value="modifier" class="button"></a>
					</td>
					<td>
						<form method="post" action="admin.php?page=delete&id=<?=$getUsers->id();?>" >
							<input type="submit" name="delete_user" value="supprimer" class="button_delete"/>
						</form>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>

	</div>
<?php $content = ob_get_clean(); ?>
<?php require ('template/templateAdmin.php') ?>
