<?php $css='public/boutique.css'; ?>
<?php $title='Boutiques - Astier de Villatte'; ?>

<?php ob_start(); ?>

    <div id="wrapper_boutiques">
        <div class="container_boutiques">
            <div class="container_titres">
                <p class="title-paris">A Paris,</p>
                <h1>Boutiques</h1>
            </div>
            <img src="public/img/boutiques-astier.jpg" alt="Les boutiques Astier de Villatte"/>
        </div>
    </div>

    <div class="container_transition">
        <p class="txt-transition">Maison parisienne depuis 1982, <br/>Astier de Villatte partage son histoire <br/>à travers ses 2 boutiques.</p>
    </div>

    <div id="wrapper-honore">
        <div class="container-honore">
            <div class="bloc-map"></div>
            <div class="bloc-titres">
                <div class="bloc-titre">
                    <p class="rue">Rue</p>
                    <p class="nom_shop">Saint <br/>Honore</p>
                </div>
            </div>
            <div class="bloc-img"><img src="public/img/boutique-honore-astier.jpg" alt="Boutique Astier de Villatte rue Saint Honore Paris"></div>
        </div>
    </div>


<?php $content= ob_get_clean(); ?>
<?php require ('template/templatePage.php'); ?>
