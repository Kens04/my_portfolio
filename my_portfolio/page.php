<?php

/*
Template Name: contact
*/
?>

// ループ開始
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
// 投稿内容を出力
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; else : ?>
// 投稿がない場合の表示を処理
...
<?php endif; ?>