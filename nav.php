//require get_template_directory() . '/core-nav.php';
// llamo al archivo nav.php para ejecutar el array del menu y poder imprimir el menu donde quieras, para llamarlo solo usar: include get_template_directory() . '/core-nav.php';



<?php
			wp_nav_menu(
				array(
					'theme_location' => 'nombre_menu',
					'menu_id'        => 'id_menu',
					'container'         => "div",
					'container_class'   => "collapse navbar-collapse d-block d-sm-none d-md-none d-lg-none ",
					'container_id'      => "navbarNav navbarSupportedContent",
					'menu_class'        => "navbar-nav",
					
					
				
				
				)
			);
			?>
