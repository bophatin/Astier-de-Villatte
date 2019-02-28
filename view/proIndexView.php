<?php $css='public/pro.css'; ?>
<?php $title = 'Espace Pro - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <div id="form">
		<div class="background-form">
			<form method="post">
			    <label for="username">NAME</label>
          <input type="text" id="username" name="username" class="pseudo-log"/>
          <label for="password">PASSWORD</label>
          <input type="password" id="password" name="password" class="mdp-log"/>
          <input type="button" id="submit" name="submit" value="CONNEXION" class ="button"/>
			</form> 
			<div id="resultat" class="error-msg"></div>
		</div>
		<?php var_dump($_POST); ?>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template/templatePage.php'); ?>