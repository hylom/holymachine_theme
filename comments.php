<?php
   /**
   * @package WordPress
   * @subpackage holymachine_Theme
   */

   // Do not delete these lines
   if (isset($_SERVER['SCRIPT_FILENAME']) &&
   'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
   die ('Please do not load this page directly. Thanks!');
   ?>

<div id="comments" class="rounding_bottom">
  <div id="comments_inner" class="rounding_bottom">

    <?php if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p> 
    <?php return; } ?>

    <!-- You can start editing here. -->
    <?php if ( have_comments() ) : ?>
    <h3><?php comments_number("コメントなし", "1 コメント", "% コメント");?>
    </h3>
    
    <div class="comment_navigation">
      <div class="alignleft"><?php previous_comments_link() ?></div>
      <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    
    <ol class="commentlist">
      <?php wp_list_comments();?>
    </ol>
    
    <div class="comment_navigation">
      <div class="alignleft"><?php previous_comments_link() ?></div>
      <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php endif; /* ( have_comments() ) */ ?>


    <?php if ( comments_open() ) : ?>
    <h3>コメントを投稿</h3>

    <div id="cancel-comment-reply"> 
      <small><?php cancel_comment_reply_link() ?></small>
    </div> 

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

    <p>
      <?php printf('投稿には<a href="%s">ログイン</a>が必要です。', wp_login_url( get_permalink() )); ?>
    </p>

    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ( is_user_logged_in() ) : ?>

      <p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'kubrick'); ?>"><?php _e('Log out &raquo;', 'kubrick'); ?></a></p>

      <?php else : ?>

      <div class="form_author">
	<label for="author">お名前<?php if ($req) print("（必須）"); ?>：</label>
	<input type="text" name="author" id="author"
	       value="<?php echo esc_attr($comment_author); ?>"
	       size="22" tabindex="1"
	       <?php if ($req) print('aria-required="true"'); ?> />
      </div>
      
      <div class="form_email">
	<label for="email">メールアドレス（公開されません<?php if ($req) print("、必須"); ?>）：</label>
	<input type="text" name="email" id="email"
	       value="<?php echo esc_attr($comment_author_email); ?>"
	       size="22" tabindex="2"
	       <?php if ($req) print('aria-required="true"'); ?> />
      </div>

      <div class="form_url">
	<label for="url">URL：</label>
	<input type="text" name="url" id="url"
	       value="<?php echo  esc_attr($comment_author_url); ?>"
	       size="22" tabindex="3"
	       />
      </div>

      <?php endif; /* ( is_user_logged_in() ) */ ?>

      <div class="form_comment">
	<label for="comment">コメント本文：</label>
	<textarea name="comment" id="comment" cols="80" rows="10" tabindex="4"></textarea>
      </div>

      <div class="allowed_tag">
	<span>利用可能なタグ：</span>
	<?php printf('<code>%s</code>', allowed_tags()); ?>
      </div>

      <div class="form_submit">
	<input name="submit" type="submit" id="submit" tabindex="5"
	       value="<?php _e('Submit Comment', 'kubrick'); ?>" />
	<?php comment_id_fields(); ?> 
      </div>

      <?php do_action('comment_form', $post->ID); ?>
    </form>

    <?php endif; /* ( get_option('comment_registration') && !is_user_logged_in() ) */ ?>
    <?php endif; /* ( comments_open() ) */ ?>

  </div><!-- end of comments_inner -->
</div><!-- end of comments -->
