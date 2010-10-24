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
      <div class="entry rounding">
	<div class="entry_inner rounding">
	  <h3>404:Not found.</h3>
	  <p>該当する記事が見つかりませんでした。</p>
	  <p>
	    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?>トップページへ</a>
	  </p>
	</div><!-- end of entry_inner -->
      </div><!-- end of entry -->
    </div><!-- end of stories -->
    <?php get_sidebar(); ?>
    
  </div><!-- end of content -->
  <?php get_footer(); ?>
</div><!-- end of body -->


