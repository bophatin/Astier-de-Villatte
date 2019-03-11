<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Users</h1>

    <div class="container-add">
		<p class="title">Create a user</p>
		<div class="background-form">
			<form method="post" class="form">
				<label for="pseudo">PSEUDO</label>
				<input type="text" name="pseudo-add" id="nom"/>
				<label for="password">PASSWORD</label>
				<input type="password" name="mdp-add" id="mdp"/>
				<input type="submit" name="create" value="CREATE" class ="button"/>
			</form> 
		</div>
	</div>

	<p>Liste des users :</p>
	<table>
		<?php foreach($getUser as $getUsers): ?>
		<tr>
			<td><label for="id"><?= $getUsers->nameAdmin(); ?></label></td>
			<td>
				<a href="admin.php?page=updateUserView&id=<?=$getUsers->id();?>"><input type="submit" name="update" value="update" class="button-tab"></a>
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
