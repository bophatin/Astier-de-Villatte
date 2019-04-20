<?php $css='public/boutique.css'; ?>
<?php $title='Boutiques - Astier de Villatte'; ?>

<?php ob_start(); ?>
    <section id="wrapper_boutiques">
        <div class="container_boutiques">
            <div class="container_titres">
                <p class="title-paris">A Paris,</p>
                <h1>Boutiques</h1>
            </div>
            <img src="public/img/boutiques-astier.jpg" alt="Les boutiques Astier de Villatte"/>
        </div>
    </section>

    <div class="container_transition">
        <p class="txt-transition">Maison parisienne depuis 1982, <br/>Astier de Villatte partage son histoire <br/>à travers ses 2 boutiques.</p>
    </div>

    <section id="wrapper-honore">
        <div class="container-shop">
            <div class="bloc-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.696530161806!2d2.3314968157218914!3d48.86399697928812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e5ae005477%3A0xc1c7bb6dca12bfd8!2sAstier+de+Villatte!5e0!3m2!1sfr!2sfr!4v1553868788257!5m2!1sfr!2sfr" width="800" height="645" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="bloc-titres">
                <div class="bloc-titre">
                    <p class="rue">Rue</p>
                    <h2 class="nom_shop">Saint <br/>Honore</h2>
                </div>
            </div>
            <address class="address">173, rue Saint Honore, Paris Ier. <br/>Tel : 01 45 09 54 02</address>
            <div class="bloc-img"><img src="public/img/boutique-honore-astier.jpg" alt="Boutique Astier de Villatte rue Saint Honore Paris"></div>
        </div>
    </section>

    <section id="wrapper-tournon">
        <div class="container-shop">
            <div class="bloc-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4502009625!2d2.334931315721406!3d48.84962497928673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671db97ca5b71%3A0x7e45736db3d2c7d5!2sAstier+de+Villatte!5e0!3m2!1sfr!2sfr!4v1555708611769!5m2!1sfr!2sfr" width="800" height="645" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            <div class="bloc-titres">
                <div class="bloc-titre">
                    <p class="rue">Rue de</p>
                    <h3 class="nom_shop">Tournon</h3>
                </div>
            </div>
            <address class="address">16, rue de Tournon, Paris VIe. <br/>Tel : 01 45 09 54 02</address>
            <div class="bloc-img"><img src="public/img/boutique-tournon.jpg" alt="Boutique Astier de Villatte rue de Tournon Paris"></div>
        </div>
    </section>
<?php $content= ob_get_clean(); ?>

<?php require ('template/templatePage.php'); ?>
