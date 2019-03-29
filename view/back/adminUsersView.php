<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Users</h1>

	<p class="title">Create a user</p>
		<form method="post" class="form">
			<p>
				<label for="pseudo">PSEUDO</label>
				<input type="text" name="pseudo-add" id="nom"/>
            </p>
            <p>
                <label for="password">PASSWORD</label>
                 <input type="password" name="mdp-add" id="mdp"/>
            </p>
			<input type="submit" name="create" value="CREATE" class ="button"/>
		</form> 



	<p>Liste des users :</p>
	<table>
		<?php foreach($getUser as $getUsers): ?>
		<tr>
			<td><label for="id"><?= $getUsers->nameAdmin(); ?></label></td>
			<td>
				<a href="admin.php?page=updateUsersView&id=<?=$getUsers->id();?>"><input type="submit" name="update" value="update" class="button-tab"></a>
			</td>
			<td>
				<form method="post" action="admin.php?page=delete&id=<?=$getUsers->id();?>" >
					<input type="submit" name="delete_user" value="delete" class="button-tab"/>
				</form>
			</td>
		</tr>
		<?php endforeach ?>
	</table>


<?php $content = ob_get_clean(); ?>
<?php require ('template/templateAdmin.php') ?>
