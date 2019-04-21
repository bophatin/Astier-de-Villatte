<?php $css='public/collection.css' ?>
<?php $title='Eaux - Astier de Villatte' ?>

<?php ob_start(); ?>
    <section id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left">
					<div>
						<h1 class="title-left"><?= $nameMenu->nameCat(); ?></h1>
						<div class="txt-left"><?= $nameMenu->descriptionCat(); ?></div>
					</div>
				</div>
			</div>
			<div class="container-sec1-right"><img src="<?= $nameMenu->imgCat(); ?>" alt="Produits déco Astier de Villatte"></div>
		</div>
	</section>

	<div id="wrapper-section-2">
		<div class="background-section2">
			<ul class="container-articles">
				<?php foreach($articles as $article): ?>
				<li class="article">
					<img src="<?= $article->imgArt1(); ?>" alt="Produits déco Astier de Villatte">
					<div class="desc-hover">
						<a href="index.php?page=articleView&id=<?=$article->id();?>"><div class="label-art">
						<div class="title-art">
							<p><?= $article->designation(); ?></p>
						</div>
						</div></a>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templatePage.php') ?>
