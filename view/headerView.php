<header>
	<div id="wrapper-header">
		<div class="container-header">
			<div class="logo"><a href="index.php"><img src="public/img/logo.png" alt="Astier de Villatte"></a></div>
			<div class="container-nav">
				<nav>
					<ul class="menu-principal">
						<li class="menu-collection"><a href="">Collection</a>
							<ul class="submenu">
								<?php foreach($ok as $oks): ?>
								<li><a href="index.php?page=bougiesView"><?= $oks->nameCat(); ?></a></li>
								<?php endforeach ?>
							</ul>
						</li>
						<li class="menu-boutiques"><a href="">Boutiques</a></li>
						<li class="menu-about"><a href="index.php?page=about">About</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
