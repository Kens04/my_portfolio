<?php
add_action('init', function() {
    add_theme_support('post-thumbnails');

    // メニューをサポート
    register_nav_menus([
      'global_nav'  => 'グローバルナビゲーション',
    ]);
});

// アイキャッチ画像がなければ、標準画像を取得する
function get_eyecatch_with_default() {
  if (has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;

  return $img;
}

//ウィジェット機能を有効化
function theme_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバーウィッジェットエリア',
        'id' => 'primary-widget-area',
        'description' => '固定ページのサイドバー',
        'before_widget' => '<aside class="side-inner">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');

function my_contact_enqueue_scripts(){
wp_deregister_script('contact-form-7');
wp_deregister_style('contact-form-7');
if (is_page('contact')) {
	if (function_exists( 'wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
	}
	if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
	wpcf7_enqueue_styles();
	}
}
}
add_action( 'wp_enqueue_scripts', 'my_contact_enqueue_scripts');

 
/* 子テーマのstyle.cssを読み込む */
add_action( 'wp_enqueue_scripts', 'my_enqueue_style_child' ); 
function my_enqueue_style_child() { 
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
} 

