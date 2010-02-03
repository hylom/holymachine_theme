<?php
   /**
   * @package WordPress
   * @subpackage holymachine_Theme
   */
   get_header(); ?>

<div id="body">
  <div id="content" role="main">

    <?php include (TEMPLATEPATH . '/mainmenu.php'); ?>
    
    <h2 class="hidden">コンテンツ</h2>
    <div id="stories">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <div <?php post_class("rounding"); ?> id="post-<?php the_ID(); ?>">
	<div class="entry_inner rounding">
	  
	  <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
	  
	  <div class="tags">
	    <span>
	      <?php edit_post_link("編集", '[', ']'); ?>
	      <?php the_tags("[", " ", "]"); ?>
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
	    <a href="<?php echo get_permalink(); ?>">permlink</a> | 
	    <?php endif; ?>
	    <?php comments_popup_link("コメントを付ける", "コメントを見る", "コメントを見る", "", "コメント禁止" ); ?></p>
	  
	</div><!-- end of entry_inner -->
      </div><!-- post_class -->
      
      <?php endwhile; ?>
      
      <div class="navigation rounding">
	<div class="navigation_inner rounding">
	  <span class="older"><?php next_posts_link("<< 古い記事"); ?></span>
	  <span class="newer"><?php previous_posts_link("新しい記事 >>"); ?></span>
	</div>
      </div><!-- end of navigation -->
      
      <?php else : ?>
      
      <h2>Not Found</h2>
      <p>Not Found.</p>
      
      <!-- <?php get_search_form(); ?> -->
      
      <?php endif; ?>
    </div><!-- end of stories -->
    
  </div><!-- end of content -->
  
  <?php get_sidebar(); ?>
  
</div><!-- end of body -->

<?php get_footer(); ?>
