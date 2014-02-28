<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage STTF
 * @since STTF 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'stylish' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'stylish' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

        <?php
          // The Query for all posts which are published
          query_posts(array('post_type' => 'post', 'post_status' => 'publish'));

          // The Loop
          while ( have_posts() ) : the_post();
              ?>
              <!-- Do some stuff -->
              <?php
          endwhile;

          // Reset Query
          wp_reset_query();
          ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
