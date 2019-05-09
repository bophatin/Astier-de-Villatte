<?php $css='public/adminedit.css' ?>
<?php $title='Update User - BO Astier de Villatte' ?>

<?php ob_start(); ?>
    <div class="container_flex">
		<div class="create">
			<form method="post" class="form">
                <p class=titre>Modifier un utilisateur</p>
                <p>
                    <label for="pseudo">Nom d'utilisateur</label>
                    <br/><input type="text" name="pseudo-new" id="nom" value="<?= $getUser->nameAdmin(); ?>"/>
                </p>
                <p>
                    <label for="password">Nouveau mot de passe</label>
                    <br/><input type="password" name="mdp-new" id="mdp"/>
                </p>
                <p>
                    <label for="password">Retaper le nouveau mot de passe</label>
                    <br/><input type="password" name="mdp-confirm" id="mdp"/>
                </p>
				<input type="submit" name="update" value="Modifier" class ="button_add"/>
			</form> 
            <div class="error-msg"><?= (isset($error)) ? $error : '' ?></div>
        </div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>