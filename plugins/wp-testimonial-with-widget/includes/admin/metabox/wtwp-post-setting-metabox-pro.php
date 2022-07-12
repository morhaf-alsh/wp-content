<?php
/**
 * Function Custom meta box for Premium
 * 
 * @package WP Testimonials with rotator widget
 * @since 2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="pro-notice"><?php echo sprintf( __( 'Utilize these <a href="%s" target="_blank">Premium Features</a> to get best of this plugin.', 'wp-testimonial-with-widget'), WTWP_PLUGIN_LINK_UNLOCK); ?></div>
<table class="form-table wtwp-metabox-table">
	<tbody>

		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Layouts ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><strong><?php _e('3 (Grid, Slider, form).', 'wp-testimonial-with-widget'); ?></strong></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Designs ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><strong>15+ </strong><?php _e('In lite version only 4 design.', 'wp-testimonial-with-widget'); ?></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('WP Templating Features ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><strong><?php _e('You can modify plugin html/designs in your current theme.', 'wp-testimonial-with-widget'); ?></strong></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Shortcode Generator ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><strong><?php _e('Play with all shortcode parameters with preview panel. No documentation required.' , 'wp-testimonial-with-widget'); ?></strong></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Drag & Drop Slide Order Change ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><?php _e('Arrange your desired slides with your desired order and display.' , 'wp-testimonial-with-widget'); ?></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Page Builder Support ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><strong><?php _e('Gutenberg Block, Elementor, Bevear Builder, SiteOrigin, Divi, Visual Composer and Fusion Page Builder Support', 'wp-testimonial-with-widget'); ?></strong></span>
			</td>
		</tr>
		<tr class="wtwp-pro-feature">
			<th>
				<?php _e('Exclude Testimonial and Exclude Some Categories ', 'wp-testimonial-with-widget'); ?><span class="wtwp-pro-tag"><?php _e('PRO','wp-testimonial-with-widget');?></span>
			</th>
			<td>
				<span class="description"><?php _e('Do not display the testimonial & Do not display the testimonial for particular categories.' , 'wp-testimonial-with-widget'); ?></span>
			</td>
		</tr>
	</tbody>
</table><!-- end .wtwp-metabox-table -->