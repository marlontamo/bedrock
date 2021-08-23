<?php



/*register navigation */
function register_menus() { 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu',
        )
    ); 
}
add_action( 'init', 'register_menus' );