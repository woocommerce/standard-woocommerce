<?php
/**
 * Sidebar
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
$presentation_options = get_option( 'standard_theme_presentation_options' );
?>

<?php if ( 'right_sidebar_layout' == $presentation_options['layout'] && ! get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ) { ?>
	<?php get_sidebar(); ?>
<?php } // end if ?>
</div>
</div>
</div>