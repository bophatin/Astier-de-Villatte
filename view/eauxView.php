<?php $css='public/collection.css' ?>
<?php $title='Eaux - Astier de Villatte' ?>

<?php ob_start(); ?>
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
<?php $content = ob_get_clean(); ?>

<?php require ('view/templatePage.php') ?>
