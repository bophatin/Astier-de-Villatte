<?php $css='public/adminedit.css' ?>
<?php $title='Update User - BO Astier de Villatte' ?>

<?php ob_start(); ?>
    <div class="container_flex">
		<div class="create">
			<form method="post" class="form">
                <p class=titre>Modifier un user</p>
                <p>
                    <label for="pseudo">PSEUDO</label>
                    <br/><input type="text" name="pseudo-new" id="nom" value="<?= $getUser->nameAdmin(); ?>"/>
                </p>
                <p>
                    <label for="password">PASSWORD</label>
                    <br/><input type="password" name="mdp-new" id="mdp" value="<?= $getUser->pwdAdmin(); ?>"/>
                </p>
				<input type="submit" name="update" value="Modifier" class ="button_add"/>
			</form> 
        </div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
