<?php
   /**
   * @package WordPress
   * @subpackage holymachine_Theme
   */
   ?>

<!-- top navigation menu -->
<div id="top_menu" class="rounding_bottom">
  <div id="top_menu_inner" class="rounding_bottom">
    <ul>
      <?php wp_list_pages('title_li=' ); ?>
      <?php wp_list_bookmarks("categorize=0&category=2&title_li="); ?>
    </ul>
  </div>
</div>
<!-- end of top navigation menu -->

