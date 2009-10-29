<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
?>
<div id="sidebar" role="complementary">
  <?php /* Widgetized sidebar, if you have the plugin installed. */ ?>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

  <h2>記事検索</h2>
  <?php get_search_form(); ?>

    <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
	 <li><h2><?php _e('Author', 'kubrick'); ?></h2>
	   <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
	 </li>
	 -->

    <h2>その他のコンテンツ</h2>
      <ul>
	<?php wp_list_pages('title_li=' ); ?>
      </ul>

    <h2>過去の記事</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>

    <h2>カテゴリ</h2>
    <ul>
      <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>

    <h2>関連リンク</h2>
    <ul>
      <?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>'); ?>
    </ul>

    <h2>ツール</h2>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>

    <?php endif; ?>

</div><!-- end of sidebar -->
