<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/adminedit.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Back Office - Astier de Villatte</title>
</head>

<body>
    <header id="wrapper-admin">
        <div class="container-header-admin">
            <div class="bloc-logo"><img src="public/img/logo.png" class="logo"></div>
            <div class="bloc-name"><p class="hello">Hello <?php echo $_SESSION['username']; ?></p></div>
            <div class="bloc-logout"><p class="logout-butt"><a href="admin.php?page=logout">Log out</a></p></div>
        </div>
    </header>

    <div class="container-nav-content">
        <div class="bloc-nav-admin">
            <div class="navigation">
                <nav>
                    <ul>
                        <li><a href="admin.php?page=adminCategoryView">Category</a></li>
                        <li><a href="admin.php?page=adminArticlesView">Articles</a></li>
                        <li><a href="admin.php?page=adminUsersView">Users</a></li>
                    </ul>
                </nav>
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