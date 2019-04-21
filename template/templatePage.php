<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Découvrez les collections d'objets de décorations Astier de Villatte">
	<meta property="og:title" content="Astier de Villatte">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.P5.bophatin.com/">
	<meta property="og:image" content="public/img/logo.jpg">
	<meta property="og:description" content="Découvrez les collections d'objets de décorations Astier de Villatte">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@astierdevillatte">
	<meta name="twitter:title" content="Astier de Villatte">
	<meta name="twitter:description" content="Découvrez les collections d'objets de décorations Astier de Villatte">
	<meta name="twitter:creator" content="@astierdevillatte">
	<meta name="twitter:image" content="public/img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="<?= $css; ?>"/>
	<link rel="stylesheet" type="text/css" href="public/template.css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title><?= $title; ?></title>
</head>

<body>
    <?php include("view/headerView.php"); ?>
    <?= $content; ?>
	<?php include("view/footerView.php"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="public/js/ajax.js"></script>
	<script src="public/js/slider.js"></script>
	<script src="public/js/global.js"></script>
</body>

</html>