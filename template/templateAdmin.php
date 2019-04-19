<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= $css; ?>"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container-nav-content">
        <div class="bloc-nav-admin">
            <img src="public/img/logo.png" class="logo">
            <div class="navigation">
                <nav>
                    <ul>
                        <li><a href="admin.php?page=adminCategoryView">Catégories</a></li>
                        <li><a href="admin.php?page=adminArticlesView">Articles</a></li>
                        <li><a href="admin.php?page=adminNewsletterView">Newsletters</a></li>
                        <li><a href="admin.php?page=adminUsersView">Utilisateurs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bloc_id">
                <div class="id">Utilisateur : <br/><?= (isset($_SESSION['username'])) ? $_SESSION['username'] : '' ?></div>
                <div class="id"><a href="admin.php?page=logout">Deconnexion</a></div>
            </div>
        </div>
        <div class="bloc-content-admin">
            <?= $content; ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="public/js/ajax.js"></script>
	<script src="public/js/slider.js"></script>
	<script src="public/js/anime.min."></script>
	<script src="public/js/animation."></script>
	<script src="public/js/global.js"></script>
</body>

</html>