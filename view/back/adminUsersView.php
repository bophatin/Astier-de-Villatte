<?php $css='public/adminedit.css' ?>
<?php $title='B0 Category - Astier de Villatte' ?>


<?php ob_start(); ?>
   
    <h1>Users</h1>

    <ul>
        <?php foreach($getUser as $getUsers): ?>
        <li><?= $getUsers->nameAdmin(); ?></li>
        <?php endforeach ?>
    </ul>

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

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
