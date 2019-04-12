<?php $css='public/adminedit.css' ?>
<?php $title='Update Newsletter - BO Astier de Villatte' ?>


<?php ob_start(); ?>
    <h1>Newsletter</h1>

    <form method="post" class="form">
		<p>
			<label for="email">Email</label>
			<input type="text" name="email-new" id="nom" maxlength="30" value="<?= $getEmails->email(); ?>"/>
		</p>
		<input type="submit" name="update" value="UPDATE" class ="button"/>
	</form> 

<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
