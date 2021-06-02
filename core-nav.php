<?php
// registro mi nav y luego lo lo importo a mi include con la siguiente línea ---> require get_template_directory() . '/core-nav.php';

//declaro una funcion le doy nombre a mi función
if ( ! function_exists( 'custom_register_nav_menu' ) ) {
 
    function custom_register_nav_menu(){
        register_nav_menus( array(
            'nombre_menu_uno' => __( 'nombre de mi menu 1', 'text_domain' ),
            'footer_menu_dos'  => __( 'nombre de mi menu 2', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );
}
?>
