<?php $css='public/404.css'; ?>
<?php $title='Page 404 Erreur - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <section>
        <p>Erreur 404</p>
        <h1>Cette page n'existe pas</h1>
        <div class="btn"><a href="index.php">Par ici</a></div>
    </section>
<?php $content= ob_get_clean(); ?>

<?php require ('template/templatePage.php'); ?>
