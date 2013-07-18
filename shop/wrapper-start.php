<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
$presentation_options = get_option( 'standard_theme_presentation_options' );
?>

<?php if ( 'left_sidebar_layout' == $presentation_options['layout'] && ! get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ) { ?>
	<?php get_sidebar(); ?>
<?php } // end if ?>

<div id="wrapper">
	<div class="container">
		<div class="row">							
				<div id="main" class="<?php echo 'full_width_layout' == $presentation_options['layout'] || get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ? 'span12 fullwidth' : 'span8'; ?> clearfix" role="main">