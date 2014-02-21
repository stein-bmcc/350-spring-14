<?php  
/* ========================================
    NAVIGATION MENUS
======================================== */
function theme_nav_menus(){
    register_nav_menus( array(
        'main'=>'Main Menu',
        'footer'=>'Footer Menu'
        ) );
}

add_action('init','theme_nav_menus' );


?>