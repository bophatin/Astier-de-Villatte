<?php $css='public/adminedit.css' ?>
<?php $title='Update Newsletter - BO Astier de Villatte' ?>


<?php ob_start(); ?>
	<div class="container_flex">
		<div class="create">
			<form method="post" class="form">
            <p class=titre>Modifier l'adresse mail</p>
			<p>
				<label for="email">Email</label>
				<input type="text" name="email-new" id="nom" maxlength="30" value="<?= $getEmails->email(); ?>"/>
			</p>
			<input type="submit" name="update" value="Modifier" class ="button_add"/>
		    </form> 
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
