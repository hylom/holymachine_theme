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
	  <h3>検索結果</h3>

	  <?php if (have_posts()) : ?>

	  <div class="search_navigation">
	    <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
	    <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
	  </div>

	  <dl id="search_result">
	    <?php while (have_posts()) : the_post(); ?>
	    <dt id="post-<?php the_ID(); ?>">
	      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
	      <small>（<?php the_time('Y年Fj日') ?>）</small>
	    </dt>
	    <dd>
		<?php the_tags("タグ：", ', ', '<br />'); ?>
		<?php printf('カテゴリ：%s', get_the_category_list(', ')); ?>
		| <?php edit_post_link("編集", '', ' | '); ?>
		<?php comments_popup_link("コメントなし", "1 コメント", "%コメント", '', "コメント禁止" ); ?>
	    </dd>
	    <?php endwhile; ?>
	  </dl>
	  
	  <div class="search_navigation">
	    <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
	    <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
	  </div>
	  
	  <?php else : ?>
	  キーワードが見つかりませんでした。
	  <?php endif; ?>
	  
	</div><!-- end of entry_inner -->
      </div><!-- end of entry -->
    </div><!-- end of stories -->
    <?php get_sidebar(); ?>
    
  </div><!-- end of content -->
  <?php get_footer(); ?>
</div><!-- end of body -->


