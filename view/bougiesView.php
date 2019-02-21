<?php $css='public/collection.css' ?>
<?php $title='Bougies - Astier de Villatte' ?>

<?php ob_start(); ?>
    <div id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left">
					<div>
						<div class="title-left">Bougies</div>
						<div class="txt-left">5ème arrondissement de la capitale. Quartier Maubert. C’est dans ce coin qu’ils qualifient de « banlieue de Saint-Michel » et de « province au cœur de Paris » qu’Ivan Pericoli et Benoît Astier de Villatte, créateurs de la maison de céramique Astier de Villatte, ont façonné un appartement à l’image de leur univers.</div>
					</div>
				</div>
			</div>
			<div class="container-sec1-right"><img src="public/img/collection-bougie.jpg"></div>
		</div>
	</div>

	<div id="wrapper-section-2">
		<div class="background-section2">
			<ul class="container-articles">
				<li class="article">
					<img src="public/img/bougie-jerusalem.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
								<p>Bougie Jérusalem</p>
								<p>62 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-grand-paradis.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Grand Paradis</p>
								<p>98 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-stromboli.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Stromboli</p>
                                <p>185 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-jerusalem.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
								<p>Bougie Jérusalem</p>
								<p>62 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-grand-paradis.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Grand Paradis</p>
								<p>98 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-stromboli.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Stromboli</p>
                                <p>185 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-jerusalem.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
								<p>Bougie Jérusalem</p>
								<p>62 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-grand-paradis.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Grand Paradis</p>
								<p>98 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-stromboli.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Stromboli</p>
                                <p>185 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-jerusalem.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
								<p>Bougie Jérusalem</p>
								<p>62 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-grand-paradis.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Grand Paradis</p>
								<p>98 €</p>
							</div>
						</div>
					</div>
				</li>
				<li class="article">
					<img src="public/img/bougie-stromboli.jpg">
					<div class="desc-hover">
						<div class="label-art">
							<div class="title-art">
                                <p>Bougie Stromboli</p>
                                <p>185 €</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="pre-foot"></div>
<?php $content = ob_get_clean(); ?>

<?php require ('view/templatePage.php') ?>
