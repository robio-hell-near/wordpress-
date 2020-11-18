
 <?php get_header(); ?>
  <div class="container">
    <div class="main">
<!-- パンくず -->
        <div class="breadcrumb"> <?php mytheme_breadcrumb(); ?>
            </div>
<!-- ブログカード -->
         <?php 
      if(have_posts()) :
      while(have_posts()) :
      the_post();
      ?>

        <div class="blogcard">
            <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
            <div class="samne"><?php the_post_thumbnail('thumbnail'); ?></div>
           <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/default.jpg" width="150" height="150">
          <?php endif; ?>
      <div class="posts">
        <h3><?php the_title(); ?></h3>
		      <div class="info"><?php echo get_the_date(); ?> 【<?php the_category(','); ?>】</div>
		      <?php the_excerpt(); ?>
            </div>
             </a>
        </div>
        <?php 
      endwhile;
      else:
      ?>
      <p>記事はありません</p>
      <?php
      endif;
      ?>
<!-- 送りページ -->
        <?php the_posts_pagination( [
        'prev_text' => '',
        'next_text' => '',
        ] ); ?>
      </div>
<!-- サイド -->
     <?php get_sidebar(); ?>
  </div>
 <?php get_footer(); ?>
 
  