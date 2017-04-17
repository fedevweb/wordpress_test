<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dev Test</title>
	<?php wp_head(); ?>
</head>
<body>

<header class="site-header">
	<nav class="navegacion">
		<div class="container">
				<div class="navbar-header">
					<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toogle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> -->
				
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_resto.png" class="img-responsive" alt="La Aurora Tango">
				</div>

				<div class="navbar-right">
					<?php 
						/* funcion buscar en google que arg se le pueden pasar */
						wp_nav_menu(
							array(
								//theme_location - > es el nombre del tema
								'theme_location' => 'menu_principal',
								'container_class' => 'collapse navbar-collapse',
								'container_id' => 'navbar',
								'menu_class' => 'nav navbar-nav navbar-right'
							)	
						); 
					?>
				</div>
		</div>
	</nav>
</header>