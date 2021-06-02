 <?php // registro mi widget con el archivo core-widget.php y luego lo lo importo a mi donde quiera imprirlo con la siguiente línea ---> include get_template_directory() . '/modulo-widget.php';

if (is_active_sidebar('nombre_widget')) : dynamic_sidebar('nombre_widget');
		endif; ?>	
