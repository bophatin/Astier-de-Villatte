<?php $css='public/index.css'; ?>
<?php $title = 'Astier de Villatte'; ?>

<?php ob_start(); ?>
	<div id="wrapper-section-1">
		<div class="container-section-1">
			<div class="container-sec1-left">
				<div class="background-left"><img src="public/img/1.jpg" alt="Ceramic Astier de Villatte"></div>
				<div class="title-left"><p>Ceramic</p></div>
				<button class="btn"><a href="index.php?page=allArticlesView&id=2">Decouvrir</a></button>
			</div>
			<div class="container-sec1-right"><img src="public/img/2.jpg" alt="Decoration Astier de Villatte"></div>
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
						<!-- <button class="btn-collec">Decouvrir</button> -->
					</div>
				</div>
				<div class="right-bloc"><img src="public/img/main-astier.png" alt=""></div>
			</div>
		</div>
	</div>

	<div id="wrapper-section-3">
		<div class="container-img-3"><img src="public/img/theduet.jpg" alt=""></div>
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
					<li><div class="product-sec4"><img src="public/img/bougie.jpg" alt=""></div></li>
					<li><div class="product-sec4"><img src="public/img/bougie.jpg" alt=""></div></li>
					<li><div class="product-sec4"><img src="public/img/bougie.jpg" alt=""></div></li>
				</ul>
				<div class="icons-arrow">
					<div class="left-arrow"><i class="fas fa-angle-left"></i></div>
					<div class="right-arrow"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>

	<div id="wrapper-section-5">
		<div class="container-newsletter">
			<p class="txt">Newsletter</p>
			<p class="little-title">Inscrivez-vous et ne manquez plus rien !</p>
			<div class="container-form">
				<form method="post">
					<input type="text" name="email" id="email" value="Email" onFocus="if (this.value=='Email') {this.value=''}" class="email-form"/><br/>
					<input type="submit" name="sendemail" id="sendemail" value="JE M'INSCRIS" class="button-form"/>
				</form>
				<div id="response" class="error-msg"></div>
			</div>
		</div>
	</div>

	<div id="wrapper-section-6">
        <div class="container-sec6">
            <div class="container-left-sec6"><img src="public/img/article-boutique.jpg" alt=""></div>
            <div class="container-right-sec6">
                <div class="front-img-sec6"><img src="public/img/article-boutique-2.jpg" alt=""></div>
                <div class="title-cont-right"><p>Boutique</p></div>
            </div>
        </div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template/templatePage.php'); ?>