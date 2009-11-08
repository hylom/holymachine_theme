<?php
   /**
   * @package WordPress
   * @subpackage holymachine_Theme
   */
   get_header();
   ?>

<div id="body">
  <div id="content" role="main">

    <?php include (TEMPLATEPATH . '/mainmenu.php'); ?>

    <h2 class="hidden">コンテンツ</h2>
    <div id="stories">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="navigation rounding">
	<div class="navigation_inner rounding">
	  <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
	  <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>
      </div>


      <div <?php post_class("rounding_top"); ?> id="post-<?php the_ID(); ?>">
	<div class="entry_inner rounding_top">

	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>

	<div class="date"><span><?php the_date(); ?> <?php the_time(); ?></span></div>
	
	<div class="entry">
	  <?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'kubrick') . '</p>'); ?>
	</div><!-- end of entry -->
 
	<p class="entry-metadata">
	  <?php the_category(" ", "multiple"); echo(" > "); ?>
	  <?php the_tags("", " ", ""); ?>
	  | <?php edit_post_link("編集", '', ' | '); ?>
	  <?php printf('<a href="%s">コメントRSS</a>', get_post_comments_feed_link()); ?>
	  | <?php comments_popup_link("コメントを付ける", "コメントを見る", "コメントを見る", "", "コメント禁止" ); ?>
	  <?php if ( pings_open() ) { ?>
	  | <?php printf('<a href="%s" rel="trackback">トラックバックURL</a>', trackback_url(false)) ?>
	  <?php } ?>
	</p>
	
	</div>
      </div><!-- end of entry -->

      <?php comments_template(); ?>

      <div class="navigation rounding">
	<div class="navigation_inner rounding">
	  <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
	  <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>
      </div>
      

      <?php endwhile; else: ?>
      
      <p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>
      
      <?php endif; ?>

    </div><!-- end of stories -->
  </div><!-- end of content -->
  <?php get_sidebar(); ?>
</div><!-- end of body -->

<?php get_footer(); ?>
