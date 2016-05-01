<?php
    function register_themeboot_menus() {
        register_nav_menu('main-nav-menu',__('Main Nav Menu'));
        register_nav_menu('footer-nav-menu',__('Footer Nav Menu'));
    }

    add_action('init', 'register_themeboot_menus');
?>
