<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package writty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php
										if (is_archive() || is_search()):
										post_class('wide-box');
										else:
										post_class('article-box');
										endif;
										 ?>>
										
	
			<figure>
		<?php	if (  is_archive() ||   is_search()):	?>		
				
		<?php	else:	?>	
						<?php writty_post_thumbnail(); ?>
		<?php	endif;	?>			
				
			</figure>
		<header class="entry-header">
		
			<div class="entry-meta">
				<?php
				writty_posted_on();
				writty_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php
				the_title( '<h2 class="entry-title">', '</h2>' );
				
			?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
		the_excerpt(
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


		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //writty_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<a href="<?php echo esc_url( get_permalink()); ?>" class="article-btn">Read More</a>

<!-- <div class="sharing-links">
	<span class="share-txt">share</span>
	<?php // echo share_buttons(); ?>
</div> -->


</article><!-- #post-<?php the_ID(); ?> -->
	<?php

	?>
