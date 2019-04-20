<?php $css='public/about.css'; ?>
<?php $title='A propos - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <div id="wrapper-section-1">
        <div class="container-sec1">
			<div class="bloc-left">
				<div class="txt-left-duet"><h1 class="title-left">The duet</h1></div>
			</div>
			<div class="bloc-right"><img src="public/img/about-duo.jpg"></div>
        </div>
	</div>

	<div id="wrapper-section-2">
		<div class="container-sec2">
			<div class="bloc-left-sec2">
				<img src="public/img/about-fleurs.jpg">
			</div>
			<div class="bloc-right-sec2">
				<div class="txt-right-sec2">
					<h2 class="title-sec2">Ivan Percolini & <br/>Benoit Astier de Villatte</h2>
	                <p class="txt-sec2">Astier de Villate, fondé en 1996, est le fabricant de céramiques le plus chic et sobre de Paris en s'inspirant des quatre coins du monde. Cette Maison, connue pour ses collaborations prestigieuses avec l'artiste Setsuko Klossowska de Rola, veuve du peintre Balthus ou John Derian, utilise un réel savoir-faire artisanal puisque ce ce sont d’anciens moines Tibétains qui fabriquent les céramiques. Ivan Pericoli & Benoît Astier de Villatte se rencontrent dans les années 90 dans un café de Saint-Germain. Formés au sein des Beaux-Arts de Paris, ils travaillent ensemble dans l'atelier de Georges Jeanclos, ils y apprennent l'art de la scupture. Un de leurs objets sera publié dans la presse, ils décideront alors de participer au salon Maison & Objet en 1996 et de créer leurs propre marque ensuite.</p>
				</div>
			</div>
		</div>	
	</div>

	<div id="wrapper-section-3">
		<h3 class="title-sec3">L'appartement</h3>
		<section>
		<div class="container-sec3">
			<div class=bloc-3>
				<div class=bloc-in3>
					<img src="public/img/about-1.jpg" alt="">
				</div>
				<div class=bloc-p3>
					<p>Ambiance XVIIème siècle</p>
				</div>
			</div>
			<div class=bloc-3-end>
				<div class=bloc-in3>
					<img src="public/img/about-3.jpg" alt="">
				</div>
				<div class=bloc-p3>
					<p>Une lumière d'atelier</p>
				</div>
			</div>
			<div class=bloc-3>
				<div class=bloc-in3>
					<img src="public/img/about-2.jpg" alt="">
				</div>
				<div class=bloc-p3>
					<p>Des objets aux histoires curieuses</p>
				</div>
			</div>
		</div>
		</section>
	</div>

	<div id="wrapper-section-4">
		<div class="container-sec4">
			<img src="public/img/about-atelier.jpg" alt="">
			<h4>Atelier Parisien</h4>
		</div>
		<div class="container-txt4">
			<p class="text-sec4">Astier de Villate, fondé en 1996, est le fabricant de céramiques le plus chic et sobre de Paris en s'inspirant des quatre coins du monde. Cette Maison, connue pour ses collaborations prestigieuses avec l'artiste Setsuko Klossowska de Rola, veuve du peintre Balthus ou John Derian, utilise un réel savoir-faire artisanal puisque ce ce sont d’anciens moines Tibétains qui fabriquent les céramiques. Ivan Pericoli & Benoît Astier de Villatte se rencontrent dans les années 90 dans un café de Saint-Germain. Formés au sein des Beaux-Arts de Paris, ils travaillent ensemble dans l'atelier de Georges Jeanclos, ils y apprennent l'art de la scupture.</p>
			<!--<button><a href="">Decouvrir</a></button>-->
		</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template/templatePage.php'); ?>