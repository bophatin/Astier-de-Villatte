<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/index.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>Home Page - Astier de Villatte</title>
</head>

<body>

	<?php include("headerView.php"); ?>

	<div id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left"><img src="public/img/1.jpg" alt=""></div>
				<div class="title-left"><p>Ceramic</p></div>
				<button class="btn">Decouvrir</button>
			</div>
			<div class="container-sec1-right"><img src="public/img/2.jpg"></div>
		</div>
	</div>
	<div id="wrapper-section-2">
		<div class="container-section-2">
			<div class="back-grey">
				<div class="text-grey">
					<p class="little-title">Collection</p>
					<p class="txt">Un lieu au chic discret <br/>et au raffinement désuet. Quartier Maubert.</p>
				</div>
			</div>
			<div class="container-blocs">
				<div class="left-bloc">
					<div class="bloc-txt">
						<p class="text-title">Collection</p>
						<p class="text-desc">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers.</p>
						<button class="btn-collec">Decouvrir</button>
					</div>
				</div>
				<div class="right-bloc"><img src="public/img/main-astier.png"></div>
			</div>
		</div>
	</div>

	<div id="wrapper-section-3">
		<div class="container-img-3"><img src="public/img/theduet.jpg"></div>
	</div>

	<div class="back-green">
		<div class="container-green">
			<div class="left-green">
				<p class="title-green">The Duet</p>
				<p class="lititle-green">Ivan & Benoit</p>
			</div>
			<div class="right-green">
				<p class="text-green">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers. Quartier Maubert.</p>
				<button class="btn-collec">Decouvrir</button>
			</div>
		</div>
	</div>

	<div id="wrapper-section-4">
		<div class="container-section-4">
			<div class="container-title-sec4">
				<p class="title-sec4">Villa Medicis</p>
				<p class="under-title-sec4">Bougies</p>
			</div>
			<div class="container-list-sec4">
				<ul>
					<li><div class="product-sec4"><img src="public/img/bougie.jpg"></div></li>
					<li><div class="product-sec4"><img src="public/img/bougie.jpg"></div></li>
					<li><div class="product-sec4"><img src="public/img/bougie.jpg"></div></li>
				</ul>
				<div class="icons-arrow">
					<div class="left-arrow"><i class="fas fa-angle-left"></i></div>
					<div class="right-arrow"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper-section-5">
		<div class="txt">
			<p>Newsletter</p>
			<p>et au raffinement désuet. Quartier Maubert.</p>
		</div>
	</div>

	<div id="wrapper-section-6">
        <div class="container-sec6">
            <div class="container-left-sec6"><img src="public/img/article-boutique.jpg"></div>
            <div class="container-right-sec6">
                <div class="front-img-sec6"><img src="public/img/article-boutique-2.jpg"></div>
                <div class="title-cont-right"><p>Boutique</p></div>
            </div>
        </div>
	</div>
	
	<?php include("view/footerView.php"); ?>
	
	<script src="public/js/anime.min.js"></script>
	<script src="public/js/animation.js"></script>
</body>

</html>
