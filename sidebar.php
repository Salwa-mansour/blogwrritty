<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package writty
 */

if ( ! is_active_sidebar( 'sidebar-home' ) && ! is_active_sidebar('sidebar-page')  ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<!-- <section  class=""> -->
                <form role="search" method="get" action="" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                  
                    <div class="wp-block-search__inside-wrapper">
                        <input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value="" placeholder="" required="">
                        <button type="submit" class="wp-block-search__button ">
							<span class="dashicons dashicons-search"></span>
						</button>
                    </div>
                </form>
            <!-- </section> -->
    <?php if(is_home() || is_archive() ): ?>
	<?php dynamic_sidebar( 'sidebar-home' ); ?>
    <?php else: ?>
    <?php dynamic_sidebar('sidebar-post'); ?>
    <?php endif; ?>
</aside><!-- #secondary -->
