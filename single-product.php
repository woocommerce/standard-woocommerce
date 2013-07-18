<?php
/**
 * This template is used for Woocommerce single product view
 *
 * @package Standard Woocommerce
 * @since 1.0
 */
?>
<?php get_header(); ?>
<?php $presentation_options = get_option( 'standard_theme_presentation_options' ); ?>
<?php global $post, $woocommerce; ?>
<div id="wrapper">
	<div class="container">
		<div class="row">

			<?php if ( 'left_sidebar_layout' == $presentation_options['layout'] && ! get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ) { ?>
				<?php get_sidebar(); ?>
			<?php } // end if ?>

			<div id="main" class="<?php echo 'full_width_layout' == $presentation_options['layout'] || get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ? 'span12 fullwidth' : 'span8'; ?> clearfix" role="main">
				
				<?php get_template_part( 'breadcrumbs' ); ?>
				
						<?php woocommerce_single_product_content(); ?>	
	
							<?php $publishing_options = get_option( 'standard_theme_publishing_options' ); ?>
							<?php $display_author_box = isset( $publishing_options['display_author_box'] ) ? $publishing_options['display_author_box'] : ''; ?>
				
							<?php get_template_part( 'pagination '); ?>
						
							<?php if( is_active_sidebar( 'sidebar-2' ) ) { ?>
								<div id="standard-post-advertisement">
									<?php dynamic_sidebar( 'sidebar-2' ); ?>
								</div><!-- #standard-post-advertisement -->
							<?php } // end if ?>
							
			</div><!-- /#main -->
			
			<?php if ( 'right_sidebar_layout' == $presentation_options['layout'] && ! get_post_meta( get_the_ID(), 'standard_seo_post_level_layout', true ) ) { ?>
				<?php get_sidebar(); ?>
			<?php } // end if ?>
				
		</div> <!-- /row -->
	</div><!-- /container -->
</div> <!-- /#wrapper -->
<?php get_footer(); ?>