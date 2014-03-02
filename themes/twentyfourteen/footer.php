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

  <div id="site-info" class="clearfix">
    <span class="copyright">Copyright <?= date(Y); ?> <?php bloginfo( 'name' ); ?></span>
    </a>
  </div><!-- #site-info -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
