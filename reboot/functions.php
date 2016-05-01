<?php
    function register_main_nav_menu() {
        register_nav_menu('main-nav-menu',__( 'Main Nav Menu' ));
    }

    add_action('init', 'register_main_nav_menu');
?>
