<?php get_header(); ?>
  <div class="container">
    <div class="main">
<!-- パンくず -->
        <div class="breadcrumb"> <?php mytheme_breadcrumb(); ?>
            </div>
<!-- 個別投稿 -->
         <?php 
      if(have_posts()) :
      while(have_posts()) :
      the_post();
      ?>
　　　　　<div class="posts2">
        <div class="info2"><?php echo get_the_date(); ?> 【<?php the_category(','); ?>】</div>
        <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
           <div class="thumbnail"><?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
           <?php else: ?>
          <?php endif; ?></div>
               <p><?php the_content(); ?></p>
        </div>
<!-- 送りページ -->
        <div id="prenext">
        <div class="pre"><?php previous_post_link(); ?></div>
　　　<div class="next"><?php next_post_link(); ?></div>
     </div>
       <?php 
      endwhile;
      else:
      ?>
        <p>記事はありません</p>
      <?php
      endif;
      ?>
      </div>
<!-- サイド -->
     <?php get_sidebar(); ?>
  </div>
 <?php get_footer(); ?>
 
  