<?php // registro mi widget y luego lo lo importo a mi function.php con la siguiente línea ---> require get_template_directory() . '/core-zona-widget.php';


function widget_footer() {
	
		register_sidebar(
		array(
			'name'          => esc_html__( 'Nombre widget', 'tema-para-alumnos-base' ),
			'id'            => 'nombre_widget',
			'description'   => esc_html__( 'Descripción widget', 'tema-para-alumnos-base' ),
			'before_widget' => '<section id="%1$s" class="widget col-12 col-md-3 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'widget_footer');
?>
