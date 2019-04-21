<?php $css='public/index.css'; ?>
<?php $title = 'Astier de Villatte'; ?>

<?php ob_start(); ?>
	<!-- 1. PUSH PRODUIT FULL PAGE -->
	<section id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left"><img src="public/img/1.jpg" alt="Ceramic Astier de Villatte"></div>
				<div class="title-left"><h1>Ceramic</h1></div>
				<div class="btn"><a href="index.php?page=allArticles&id=2">Decouvrir</a></div>
			</div>
			<div class="container-sec1-right"><img src="public/img/2.jpg" alt="Decoration Astier de Villatte"></div>
		</div>
	</section>
	
	<!-- 2. COLLECTION FOND GRIS -->
	<section id="wrapper-section-2">
		<div class="container-section-2">
			<div class="back-grey">
				<div class="text-grey">
					<p class="little-title">Collection</p>
					<h2 class="txt">Un lieu au chic discret <br/>et au raffinement désuet. Quartier Maubert.</h2>
				</div>
			</div>
			<div class="container-blocs">
				<div class="left-bloc">
					<div class="bloc-txt">
						<p class="text-title">Collection</p>
						<p class="text-desc">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers.</p>
					</div>
				</div>
				<div class="right-bloc"><img src="public/img/main-astier.png" alt="Ceramic main Astier de Villatte"></div>
			</div>
		</div>
	</section>

	<!-- 3. THE DUET -->
	<section id="wrapper-section-3">
		<div class="container-img-3"><img src="public/img/theduet.jpg" alt="Ivan & Benoit Astier de Villatte"></div>
		<div class="back-green">
			<div class="container-green">
				<div class="left-green">
					<h3 class="title-green">The Duet</h3>
					<p class="lititle-green">Ivan & Benoit</p>
				</div>
				<div class="right-green">
					<p class="text-green">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers. Quartier Maubert.</p>
					<div class="btn-collec"><a href="index.php?page=about">Decouvrir</a></div>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. SLIDER -->
	<section id="wrapper-section-4">
		<div class="container-section-4">
			<div class="container-title-sec4">
				<h4 class="title-sec4">Villa Medicis</h4>
				<p class="under-title-sec4">Les eaux</p>
			</div>
			<?php foreach ($groupesSliders as $groupeSlider): ?>
			<div class="container-list-sec4" id="carrousel">
				<ul>
				<?php foreach ($groupeSlider as $sliders): ?>
					<li class="slide">
						<?php foreach ($sliders as $slider): ?>
							<a href="index.php?page=articleView&id=<?=$slider->id();?>">
								<img src="<?= $slider->imgArt1(); ?>" alt="" class="product-sec4">
							</a>
						<?php endforeach ?>
					</li>
				<?php endforeach ?>
				</ul>
				<div class="icons-arrow">
					<div id="button-previous" class="left-arrow"><i class="fas fa-angle-left"></i></div>
					<div id="button-next" class="right-arrow"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</section>

	<!-- 5. NEWSLETTER -->
	<section id="wrapper-section-5">
		<div class="container-newsletter">
			<h5 class="txt-newslett">Newsletter</h5>
			<p class="little-title">Inscrivez-vous et ne manquez plus rien !</p>
			<div class="container-form">
				<form action="index.php?page=action" id="newsletter" method="POST">
					<input type="text" name="email" id="email" placeholder="Email"  class="email-form"/><br/>
					<input type="submit" name="sendemail" id="sendemail" value="JE M'INSCRIS" class="button-form"/>
				</form>
				<div id="response_ok" class="ok-msg"></div>
				<div id="response_error" class="error-msg"></div>
			</div>
		</div>
	</section>

	<!-- 6. BOUTIQUES -->
	<section id="wrapper-section-6">
        <div class="container-sec6">
            <div class="container-left-sec6"><img src="public/img/article-boutique.jpg" alt="Boutique Paris 1 Astier de Villatte"></div>
            <div class="container-right-sec6">
                <div class="front-img-sec6"><img src="public/img/article-boutique-2.jpg" alt="Boutique Paris 6 Astier de Villatte"></div>
                <div class="title-cont-right"><h6>Boutique</h6></div>
            </div>
        </div>
	</section>
<?php $content = ob_get_clean(); ?>

<?php require('template/templatePage.php'); ?>