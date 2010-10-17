<?php
   /**
   * @package WordPress
   * @subpackage holymachine_Theme
   */
   get_header(); ?>

<div id="body">
  <div id="content" role="main">

    <?php include (TEMPLATEPATH . '/mainmenu.php'); ?>
    
    <div id="stories">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <!-- ナビゲーション -->
      <?php if (is_single() ) : ?>
      <div class="navigation rounding">
	<div class="navigation_inner rounding">
	  <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
	  <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>
      </div>
      <?php endif; ?>
      <!-- end of ナビゲーション -->

      <div <?php post_class("rounding"); ?> id="post-<?php the_ID(); ?>">
	<div class="entry_inner rounding">
	  
	  <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	  
	  <div class="tags">
	    <span>
	      <?php edit_post_link("編集", '[', ']'); ?>
	      <?php the_tags("[", "] [", "]"); ?>
	    </span>
	  </div>

	  <div class="date">
	    <span><?php the_date(); ?> <?php the_time(); ?></span>
	  </div>
	  
	  <div class="entry-body">
	    <?php the_content("", false); ?>
	  </div><!-- end of entry -->
	  
	  <p class="entry-metadata">
	    <?php if( has_more() ) : ?>
	    <a href="<?php echo get_permalink(); ?>" class="more">続きを読む...</a> | 
	    <?php else : ?>
	    <a href="<?php echo get_permalink(); ?>">permalink</a> | 
	    <?php endif; ?>

	    <?php edit_post_link("編集", '', ' | '); ?>

	    <?php comments_popup_link("コメントを付ける", "コメントを見る", "コメントを見る", "", "コメント禁止" ); ?> | 

	    <?php if (is_single()) : ?>
	    <?php printf('<a href="%s">コメントRSS</a>', get_post_comments_feed_link()); ?> | 
	    <?php endif; ?>

	    <?php if ( pings_open() ) { ?>
	    <?php printf('<a href="%s" rel="trackback">トラックバックURL</a>', trackback_url(false)) ?>
	    <?php } ?>
	  </p>
	  
	</div><!-- end of entry_inner -->
      </div><!-- post_class -->


      <!-- コメント -->
      <?php if (is_single() ) : ?>
      <?php comments_template(); ?>
      <?php endif; ?>
      <!-- end of コメント -->

      <?php endwhile; ?>

      <!-- ナビゲーション -->
      <div class="navigation rounding">
	<div class="navigation_inner rounding">
	  <?php if (is_single() ) : ?>
	  <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
	  <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	  <?php else: ?>
	  <span class="older"><?php next_posts_link("<< 古い記事"); ?></span>
	  <span class="newer"><?php previous_posts_link("新しい記事 >>"); ?></span>
	  <?php endif; ?>
	</div>
      </div>
      <!-- end of ナビゲーション -->
      
      <?php else : ?>
      
      <p>Not Found.</p>
      
      <!-- <?php get_search_form(); ?> -->
      
      <?php endif; ?>
    </div><!-- end of stories -->
    
  </div><!-- end of content -->
  
  <?php get_sidebar(); ?>
  
</div><!-- end of body -->

<?php get_footer(); ?>
