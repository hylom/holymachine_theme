<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
?>

<div id="footer" role="contentinfo">
  <!--
      If you'd like to support WordPress, having the "powered by" link somewhere
      on your blog is the best way; it's our only promotion or advertising. 
    -->
  <p>
    <?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/">WordPress</a>.
  </p>
  <p>
    <a href="<?php bloginfo('rss2_url'); ?>">[記事RSS]</a>
    <a href="<?php bloginfo('comments_rss2_url'); ?>">[コメントRSS]</a>
  </p>

  <!-- 
       <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?>
       -->

</div><!-- end of footer -->

<?php wp_footer(); ?>
</body>
</html>
