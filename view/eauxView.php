<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/collection.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>Les Eaux - Astier de Villatte</title>
</head>

<body>
	
	<?php include("headerView.php"); ?>

    <div id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left">
					<div>
						<div class="title-left">Les Eaux</div>
						<div class="txt-left">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers.</div>
					</div>
				</div>
			</div>
			<div class="container-sec1-right"><img src="public/img/collection-leseaux.jpg"></div>
		</div>
	</div>

	<div id="wrapper-section-2">
		<div class="background-section2">
			<ul class="container-articles">
				<?php foreach($articles as $article): ?>
				<li class="article">
					<img src="<?= $article->imgArt1(); ?>">
					<div class="desc-hover">
						<a href="index.php?page=articleView&id=<?=$article->id();?>"><div class="label-art">
						<div class="title-art">
							<p><?= $article->designation(); ?></p>
							<p><?= $article->prix(); ?>€</p>
						</div>
						</div></a>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="pre-foot"></div>
	<?php include("footerView.php"); ?>

</body>

</html>

