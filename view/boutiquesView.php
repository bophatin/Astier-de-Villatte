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
            <div class="bloc-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.696530161806!2d2.3314968157218914!3d48.86399697928812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e5ae005477%3A0xc1c7bb6dca12bfd8!2sAstier+de+Villatte!5e0!3m2!1sfr!2sfr!4v1553868788257!5m2!1sfr!2sfr" width="800" height="645" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="bloc-titres">
                <div class="bloc-titre">
                    <p class="rue">Rue</p>
                    <p class="nom_shop">Saint <br/>Honore</p>
                </div>
            </div>
            <div class="bloc-img"><img src="public/img/boutique-honore-astier.jpg" alt="Boutique Astier de Villatte rue Saint Honore Paris"></div>
        </div>
    </div>

    <script src="public/js/map.js"></script>


<?php $content= ob_get_clean(); ?>
<?php require ('template/templatePage.php'); ?>
