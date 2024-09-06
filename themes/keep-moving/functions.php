<?php
function keep_moving_register_menus() {
  register_nav_menu('header-menu', 'Menu Principal');
}
add_action('init', 'keep_moving_register_menus');