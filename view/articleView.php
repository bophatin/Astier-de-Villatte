<?php $css='public/article.css'; ?>
<?php $title='Article - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <!-- 1. GRANDE IMG + TITRE PDUIT -->
    <section id="wrapper-section-1">
		<div class="container-section-1">
        <div class="container-sec1-left"><img src="<?= $post->imgBig(); ?>"></div>
		<div class="container-sec1-right">
			<div class="background-right">
				<h1 class="title-right"><?= $post->designation(); ?></h1>
			</div>
		</div>
		</div>
    </section>

    <!-- 2. TEXTE + IMG PRDUIT -->
    <section id="wrapper-section-2">
        <div class="container-section-2">
            <div class="container-sec2-left">
                <div class="desc-left">
                    <h2 class="title-left"><?= $post->titleDesc(); ?></h2>
                    <p class=txt-left><?= $post->descriptionArt(); ?></p>
                    <div class="infos-left">
                        <p class="ml-left">Plus d'infos ?</p>
                        <p class="price-right"><a href="index.php?page=boutiques">Nos magasins</a></p>
                    </div>
                </div>
            </div>
            <div class="container-sec2-right">
                <img src="<?= $post->imgArt1(); ?>" class="img-splash">
            </div>
        </div>
    </section>

    <!-- 3. BLOCS 01 02 03 -->
    <div id="wrapper-section-3">
        <div class="container-sec3">
            <div class="bloc-sec3">
                <p class="title-bloc">01 Fabrication</p>
                <p class="txt-bloc">Faite main</p>
            </div>
            <div class="bloc-sec3">
                <p class="title-bloc">02 Caractère</p>
                <p class="txt-bloc">Unique</p>
            </div>
            <div class="bloc-sec3">
                <p class="title-bloc">03 Atelier</p>
                <p class="txt-bloc">à Paris</p>
            </div>
        </div>
    </div>

    <!-- 4. À TABLE ! -->
    <div id="wrapper-section-4">
        <div class="container-sec4">
            <div class="container-img-sec4">
                <img src ="public/img/atable-astier.jpg">
            </div>
            <div class="container-title-sec4">
                <div class="title-sec4">Des objets pour la maison</div>
            </div>
        </div>
    </div>
<?php $content= ob_get_clean(); ?>

<?php require ('template/templatePage.php'); ?>
