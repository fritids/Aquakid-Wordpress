<?php
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('Personnage', array(
		'label' => __('Personnages'),
		'singular_label' => __('Personnage'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	));
	register_post_type('Article de presse', array(
		'label' => __('Articles de presse'),
		'singular_label' => __('Article de presse'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'thumbnail')
	));
		register_post_type('Dessin', array(
		'label' => __('Dessins'),
		'singular_label' => __('Dessin'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'thumbnail')
	));
}
