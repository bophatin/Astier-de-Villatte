<?php $css='public/about.css'; ?>
<?php $title='About - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <div id="wrapper-section-1">
        <div class="container-sec1">
			<div class="bloc-left">
				<div class="txt-left-duet"><p class="title-left">The duet</p></div>
			</div>
			<div class="bloc-right"><img src="public/img/about-duo.jpg"></div>
        </div>
	</div>
	
	<div id="wrapper-section-2">
		<div class="container-sec2">
			<div class="img-left-sec2"><img src="public/img/about-fleurs.jpg"></div>
		</div>	
	</div>

	<div id="wrapper-section-3">
		<div class="container-sec3">
			<div class="container-left-sec3">
				<div class="bloc-left-date"><div class="date-left">1980</div></div>
				<div class="bloc-left-txt"><div class="txt-left">Astier de Villate, fondé en 1996, est le fabricant de céramiques le plus chic et sobre de Paris en s'inspirant des quatre coins du monde. Cette Maison, connue pour ses collaborations prestigieuses avec l'artiste Setsuko Klossowska de Rola, veuve du peintre Balthus ou John Derian, utilise un réel savoir-faire artisanal puisque ce ce sont d’anciens moines Tibétains qui fabriquent les céramiques.</div></div>
			</div>
			<div class="container-right-sec3">
				<div class="bloc-right-txt"><div class="txt-right">Ivan Pericoli & Benoît Astier de Villatte se rencontrent dans les années 90 dans un café de Saint-Germain. Formés au sein des Beaux-Arts de Paris, ils travaillent ensemble dans l'atelier de Georges Jeanclos, ils y apprennent l'art de la scupture. Un de leurs objets sera publié dans la presse, ils décideront alors de participer au salon Maison & Objet en 1996 et de créer leurs propre marque ensuite.</div></div>
				<div class="bloc-right-date"><div class="date-right">1996</div></div>
			</div>
		</div>

		<div class="container-img-atelier"><img src="public/img/about-atelier.jpg"></div>
		
		<div class="container-frise-down">
			<div class="container-left-fd">
				<div class="bloc-left-date"><div class="date-left">2001</div></div>
				<div class="bloc-left-txt"><div class="txt-left">Astier de Villatte ouvre sa très attendue première adresse Rive Gauche, au 16 rue de Tournon exactement, dans une ancienne librairie dont l’écrin originel rappelle étonnamment les célèbres imprimés de la marque. Le vitrail niché au fond de la boutique signé de l’artiste Pierre Carron donne un caractère unique à l’endroit. Pour célébrer cet opening, la marque lance sa merveilleuse collection d’eaux de Cologne aux senteurs oscillant entre authenticité et modernité : plaisir absolu, élixirs de longue vie, parfums de sorcellerie, une gamme tout en finesse imaginée par les parfumeurs de renom Françoise Caron et Christophe Raynaus.</div></div>
			</div>
			<div class="container-right-fd">
				<div class="bloc-right-txt"><div class="txt-right-2001">Première boutique rue Saint-honoré dans le 1er arrondissement de Paris.</div></div>
				<div class="bloc-right-date"><div class="date-right">2016</div></div>
			</div>
		</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template/templatePage.php'); ?>