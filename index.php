<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
get_header(); ?>

<div id="body">
  <div id="content" role="main">

    <div id="top_menu">
      <ul>
	<li><a href="#">Diary</a></li>
	<li><a href="#">Programming</a></li>
	<li><a href="#">Apple</a></li>
	<li><a href="#">Linux/UNIX</a></li>
	<li><a href="#">MyWorks</a></li>
	<?php wp_list_pages('title_li=' ); ?>
      </ul>
    </div>

    <h2 class="hidden">コンテンツ</h2>
    <div id="stories">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>

	<div class="date"><span><?php the_date(); ?> <?php the_time(); ?></span></div>
	
	<div class="entry-body">
	  <?php the_content("続きを読む...", false); ?>
	</div><!-- end of entry -->
      
	<p class="entry-metadata">
	  <?php the_category(" ", "multiple"); echo(" > "); ?>
	  <?php the_tags("", " ", ""); ?>
	  | <?php edit_post_link("編集", '', ' | '); ?>
	  <?php comments_popup_link("コメントを付ける", "コメントを見る", "コメントを見る", "", "コメント禁止" ); ?></p>
      </div><!-- post_class -->
    
      <?php endwhile; ?>
    
      <div class="navigation">
	<span class="older"><?php next_posts_link("<< 古い記事"); ?></span>
	<span class="newer"><?php previous_posts_link("新しい記事 >>"); ?></span>
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
