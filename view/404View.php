<?php $css='public/article.css'; ?>
<?php $title='Article - Astier de Villatte'; ?>

<?php ob_start(); ?>
 <h1>Cette page n'existe plus</h1>
<?php $content= ob_get_clean(); ?>

<?php require ('template/templatePage.php'); ?>
