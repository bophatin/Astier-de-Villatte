<?php $newListMenu = new CategoryManager(); $menu = $newListMenu->getListCat(); ?>

<header>
     <div id="wrapper-header">
        <div class="container-header">
            <div class="logo"><a href="index.php"><img src="public/img/logo.png" alt="Astier de Villatte"></a></div>
            <div class="container-nav">	
                <nav>
                    <ul class="menu-principal">
                        <li class="menu-collection">Collections
                            <ul class="submenu">
                                <?php foreach($menu as $menus): ?>
                                <li><a href="index.php?page=allArticles&id=<?= $menus->id(); ?>"><?= $menus->nameCat(); ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                        <li class="menu-boutiques"><a href="index.php?page=boutiques">Boutiques</a></li>
                        <li class="menu-about"><a href="index.php?page=about">A propos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>