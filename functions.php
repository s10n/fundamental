<?php

// 스타일시트 및 자바스크립트
function akaiv_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'project-style', get_stylesheet_uri() );
	// wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	// wp_enqueue_script( 'project-script', get_template_directory_uri() . '/js/project.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'akaiv_scripts' );

// 테마 커스터마이징: 테마서포트 및 메뉴
function akaiv_setup() {
	register_nav_menu( 'gnb', '주 메뉴' );
	show_admin_bar(false);
}
add_action( 'after_setup_theme', 'akaiv_setup' );
