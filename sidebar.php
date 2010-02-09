<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
?>
<div id="sidebar" class="rounding_bottom" role="complementary">
<div id="sidebar_inner" class="rounding_bottom">
  <?php /* Widgetized sidebar, if you have the plugin installed. */ ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

    <div class="sidebar_search sidebar_text">
      <h2 class="hidden">記事検索</h2>
      <?php get_search_form(); ?>
    </div>

    <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
	 <li><h2><?php _e('Author', 'kubrick'); ?></h2>
	   <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
	 </li>
	 -->
    <div class="sidebar_calendar sidebar_text">
      <?php get_calendar(false); ?>
    </div>

    <div class="sidebar_resent sidebar_text">
      <h2>最近の記事</h2>
      <ul>
	<?php wp_get_archives('type=postbypost&limit=10'); ?>
      </ul>
    </div>

    <div class="sidebar_archives sidebar_text">
      <h2>過去の記事（過去12か月分）</h2>
      <ul>
	<?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
    </div>

    <div class="sidebar_categories sidebar_text">
      <h2>カテゴリ</h2>
      <ul>
	<?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
    </div>

    <div class="sidebar_categories sidebar_text">
      <h2>タグ</h2>
      <ul>
	<?php wp_tag_cloud('smallest=10&largest=10&orderby=count&order=DESC'); ?>
      </ul>
    </div>

    <div class="sidebar_tools sidebar_text">
      <h2>ツール</h2>
      <ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<?php wp_meta(); ?>
      </ul>
    </div>

    <?php endif; ?>
</div><!-- end of sidebar -->
</div>
