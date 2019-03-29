<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Update User</h1>

    <div id="wrapper-form">
		<div class="container-add">
			<p class="title">Update a user</p>
			<div class="background-form">
				<form method="post" class="form">
					<label for="pseudo">PSEUDO</label>
					<input type="text" name="pseudo-new" id="nom" value="<?= $getUser->nameAdmin(); ?>"/>
					<label for="password">PASSWORD</label>
					<input type="password" name="mdp-new" id="mdp" value="<?= $getUser->pwdAdmin(); ?>"/>
					<input type="submit" name="update" value="UPDATE" class ="button"/>
				</form> 
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
