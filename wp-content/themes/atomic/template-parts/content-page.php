<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Atomic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Grab the featured image -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="featured-image"><?php the_post_thumbnail( 'atomic-featured-image' ); ?></div>
	<?php } ?>

	<?php
		// Post meta sidebar
		get_template_part( 'template-parts/content-left-sidebar' );
	?>

	<div class="content-right">
		<div class="entry-content">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atomic' ),
					'after'  => '</div>',
				) );

				edit_post_link();
			?>
		</div><!-- .entry-content -->

		<?php // Comments template
		comments_template(); ?>
	</div>
</article><!-- #post-## -->
