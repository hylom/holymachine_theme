<?php
/**
 * @package WordPress
 * @subpackage holymachine_Theme
 */
?>

<div id="footer" role="contentinfo">
<div id="footer_inner">
  <!--
      If you'd like to support WordPress, having the "powered by" link somewhere
      on your blog is the best way; it's our only promotion or advertising. 
    -->
  <div id="credit">
    <?php bloginfo('name'); ?>, © 2009 hylom &lt;hylom atmark hylom.net&gt;.
  </div><!-- end of credit -->

  <div id="powered">
    <?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/">WordPress</a>.
  </div><!-- end of powered -->

  <div id="rss">
    <a href="<?php bloginfo('rss2_url'); ?>">[記事RSS]</a>
    <a href="<?php bloginfo('comments_rss2_url'); ?>">[コメントRSS]</a>
  </div><!-- end of rss -->

  <!-- 
       <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?>
       -->

</div>
</div><!-- end of footer -->

<?php wp_footer(); ?>
</body>
</html>
