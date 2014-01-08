<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after.
 *
 * @package WordPress
 * @subpackage STTF
 * @since STTF 1.0
 */
?>
	</div><!-- #main -->
	<div id="separator" class="clearfix"> </div>
	<div id="footer" class="clearfix" role="contentinfo">
    <div id="aboutus">
      <?php if(get_option('AboutHead') || get_option('AboutContent')) : ?>
        <h3><?php echo get_option('AboutHead'); ?></h3>
        <p><?php echo get_option('AboutContent'); ?></p>
      <?php endif; ?>
    </div>
    <?php if(get_option('TwitterFeed')) : ?>
      <div id="feed">
        <?php
          if(get_option('ShareTwitter')) : 
            if(get_option('TwitterFeed')) : 
              $username = get_option('ShareTwitter');
              $prefix = "<h3>Twitter Feed</h3>";
              $suffix = "";
              $feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";
      
              function parse_feed($feed) {
                $stepOne = explode("<content type=\"html\">", $feed);
                $stepTwo = explode("</content>", $stepOne[1]);
                $tweet = $stepTwo[0];
                $tweet = str_replace("&lt;", "<", $tweet);
                $tweet = str_replace("&gt;", ">", $tweet);
                return $tweet;
              }
      
              $twitterFeed = file_get_contents($feed);
              echo stripslashes($prefix) . '<p>'. parse_feed($twitterFeed) . '</p>' . stripslashes($suffix);
            endif;
          endif;
        ?>
      </div>
    <?php endif; ?>
	</div><!-- #footer -->
	
  <div id="site-info" class="clearfix">
    <span class="copyright">Copyright <?= date(Y); ?> <?php bloginfo( 'name' ); ?></span>
    </a>
  </div><!-- #site-info -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
