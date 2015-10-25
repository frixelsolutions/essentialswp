<?php

/* --- Widgets --- */

function widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'widgets_init' );

/* --- Menus --- */

require_once('inc/wp_bootstrap_navwalker.php');

function register_my_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}

add_action( 'init', 'register_my_menu' );









?>