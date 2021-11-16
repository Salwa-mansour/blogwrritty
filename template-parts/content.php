<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package writty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
	<header class="entry-header">
	<?php	if(is_single()): ?>
	<div class="sharing-links">
	<span class="share-txt"><?php esc_html_e('share' ,'writty'); ?></span>
	<?php echo share_buttons(); ?>
</div>
<?php endif; ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				writty_posted_on();
				writty_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php writty_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		echo('content.php');
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'writty' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'writty' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
		
		//writty_entry_footer();
		edit_post_link(); ?>
	</footer><!-- .entry-footer -->
	<div class="prev-next">
		<?php
	the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'writty' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'writty' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
