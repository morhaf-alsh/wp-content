<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package wp-testimonial-with-widget
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div class="wrap wptww-wrap">
	<style type="text/css">
		.wpos-box{box-shadow: 0 5px 30px 0 rgba(214,215,216,.57);background: #fff; padding-bottom:10px; position:relative;}
		.wpos-box ul{padding: 15px;}
		.wpos-box h5{background:#555; color:#fff; padding:15px; text-align:center;}
		.wpos-box h4{ padding:0 15px; margin:5px 0; font-size:18px;}
		.wpos-box .button{margin:0px 15px 15px 15px; text-align:center; padding:7px 15px; font-size:15px;display:inline-block;}
		.wpos-box .wpos-list{list-style:square; margin:10px 0 0 20px;}
		.wpos-clearfix:before, .wpos-clearfix:after{content: "";display: table;}
		.wpos-clearfix::after{clear: both;}
		.wpos-clearfix{clear: both;}
		.wpos-col{width: 47%; float: left; margin-right:10px; margin-bottom:10px;}
		.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
		.wpos-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
		.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
		.wptww-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
		.wptww-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
		.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
		.wpos-copy-clipboard{-webkit-touch-callout: all; -webkit-user-select: all; -khtml-user-select: all; -moz-user-select: all; -ms-user-select: all; user-select: all;}
		.button-orange{background: #ff5d52 !important;border-color: #ff5d52 !important; font-weight: 600;}
		.button-blue{background: #0055fb !important;border-color: #0055fb !important; font-weight: 600;}
	</style>
	<h2><?php _e( 'How It Works', 'wp-testimonial-with-widget' ); ?></h2>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">

			<!--How it workd HTML -->
			<div id="post-body-content">
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Need Support & Solutions?', 'wp-testimonial-with-widget' ); ?></span>
							</h2>
						</div>
						<div class="inside wpos-clearfix">
							<div class="wpos-col">
								<div class="wpos-box">
									<h5 style="font-size: 18px;line-height: 30px;margin: 10px 0px; background:#0055fb;">Testimonial Premium Features</h5>
									<h4>Single Plugin</h4>
									<ul class="wpos-list">
										<li><b>20+ predefined template</b> for testimonial.</li>
										<li><b>3 shortcodes</b> Grid, Slider</li>
										<li>Drag &amp; Drop order change</li>
										<li><b>Template overriding</b> feature support.</li>
										<li>Display testimonial in a <b>grid view.</b></li>
										<li>Display <b>Testimonial with slider</b>.</li>
										<li><a href="<?php echo WTWP_PLUGIN_LINK_UPGRADE; ?>" target="_blank">View More All Features</a></li>
									</ul>
									<div style="text-align:center;">
										<a class="button button-primary button-blue" href="<?php echo WTWP_PLUGIN_LINK_UPGRADE; ?>" target="_blank"><?php _e('Grab Now', 'wp-testimonial-with-widget'); ?></a>
									</div>
								</div>
							</div>
							<div class="wpos-col">
								<div class="wpos-box">
									<h5 style="font-size: 18px;line-height: 30px;margin: 10px 0px; background:#ff5d52;">Essential Bundle With Testimonial</h5>
									<h4>Bundle Deal</h4>
									<ul style="margin: 0;list-style: none;font-size: 16px;">
										<li style="margin-bottom:8px;">
											<span style="display:inline-block;vertical-align: middle;"><img src="<?php echo WTWP_URL; ?>assets/images/utility-50.png" width="24"></span> <span style="display:inline-block;vertical-align: middle;">39 Utility Plugins</span>
										</li>
										<li style="margin-bottom:8px;">
											<span style="display:inline-block;vertical-align: middle;"><img src="<?php echo WTWP_URL; ?>assets/images/inboundwp-50.png" width="24"></span> <span style="display:inline-block;vertical-align: middle;">6 Marketing Tools</span>
										</li>
										<li style="margin-bottom:8px;">
											<span style="display:inline-block;vertical-align: middle;"><img src="<?php echo WTWP_URL; ?>assets/images/SlidersPack-50.png" width="24"></span> <span style="display:inline-block;vertical-align: middle;"> 10 SlidersPack</span>
										</li>
										<li style="margin-bottom:8px;">
											<span style="display:inline-block;vertical-align: middle;"><img src="<?php echo WTWP_URL; ?>assets/images/popup-anything-icon.png" width="24"></span> <span style="display:inline-block;vertical-align: middle;"> Popup Anything A Marketing Popup</span>
										</li>
										<li>
											<span style="display:inline-block;vertical-align: middle;"><img src="<?php echo WTWP_URL; ?>assets/images/security-icon.png" width="24"></span> <span style="display:inline-block;vertical-align: middle;"> Essential Security</span>
										</li>
									</ul>
									<div style="text-align:center;">
										<a class="button button-primary button-orange" href="<?php echo WTWP_PLUGIN_BUNDLE_LINK; ?>" target="_blank"><?php _e('Grab Now', 'wp-testimonial-with-widget'); ?></a>
									</div>
								</div>
							</div>
							<div class="wpos-clearfix">
								<img src="<?php echo WTWP_URL; ?>assets/images/page-builder-support.jpg" style="max-width:100% " />
							</div>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->

				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'How It Works - Display and shortcode', 'wp-testimonial-with-widget' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('Getting Started', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to "WP Testimonials --> Add New".', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-2. Add  Testimonials title, description and images', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-3. Add Testimonial Details like Client Name, Job Title detials etc', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-4. Once added, press Publish button', 'wp-testimonial-with-widget'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('How Shortcode Works', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Create a page like Testimonials OR What our client says.', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-2. Put below shortcode as per your need.', 'wp-testimonial-with-widget'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('All Shortcodes', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
											<span class="wptww-shortcode-preview wpos-copy-clipboard">[sp_testimonials]</span> – <?php _e('Display in grid with 4 designs', 'wp-testimonial-with-widget'); ?> <br />
											<span class="wptww-shortcode-preview wpos-copy-clipboard">[sp_testimonials_slider]</span> – <?php _e('Display in slider with 4 designs', 'wp-testimonial-with-widget'); ?> <br />
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('Widget', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to Appearance --> Widget.', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-2. Use WP Testimonials Slider to display Testimonials in widget area with slider', 'wp-testimonial-with-widget'); ?></li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>
											<label><?php _e('Documentation', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
												<a class="button button-primary" href="https://docs.essentialplugin.com/wp-testimonials-with-rotator-widget/?utm_source=testimonial&utm_medium=Testimonial&utm_campaign=getting_started" target="_blank"><?php _e('Documentation', 'wp-testimonial-with-widget'); ?></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->

				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Gutenberg Support', 'wp-testimonial-with-widget' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('How it Work', 'wp-testimonial-with-widget'); ?>:</label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to the Gutenberg editor of your page.', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-2. Search "testimonial" keyword in the gutenberg block list.', 'wp-testimonial-with-widget'); ?></li>
												<li><?php _e('Step-3. Add any block of testimonial and you will find its relative options on the right end side.', 'wp-testimonial-with-widget'); ?></li>
											</ul>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->

				<!-- Help to improve this plugin! -->
				<div class="meta-box-sortables">
					<div class="postbox">
						<div class="postbox-header">
							<h2 class="hndle">
								<span><?php _e( 'Help to improve this plugin!', 'wp-testimonial-with-widget' ); ?></span>
							</h2>
						</div>
						<div class="inside">
							<p><?php echo sprintf( __( 'Enjoyed this plugin? You can help by rate this plugin <a href="%s" target="_blank">5 stars!', 'wp-testimonial-with-widget'), 'https://wordpress.org/support/plugin/wp-testimonial-with-widget/reviews/' ); ?></a></p>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-body-content -->

			<!--Upgrad to Pro HTML -->
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox wpos-pro-box">

						<h3 class="hndle">
							<span><?php _e( 'Testimonial Premium Features', 'wp-testimonial-with-widget' ); ?></span>
						</h3>
						<div class="inside">
							<ul class="wpos-list">
								<li><?php _e('20 Designs', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Testimonial front-end form.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Star rating', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Display testimonials using 20 testimonial widget designs.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Gutenberg Block Support.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Template overriding feature support.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('WPBakery Page Builder Supports.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e( 'Elementor, Bevear and SiteOrigin Page Builder Support. <span class="wpos-new-feature">New</span>', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e( 'Divi Page Builder Native Support. <span class="wpos-new-feature">New</span>', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Display Testimonial categories wise.', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('Fully responsive', 'wp-testimonial-with-widget'); ?></li>
								<li><?php _e('100% Multi language', 'wp-testimonial-with-widget'); ?></li>
							</ul>
							<div class="upgrade-to-pro"><?php _e( 'Gain access to <strong>WP testimonials with rotator widget</strong>', 'wp-testimonial-with-widget'); ?></div>
							<a class="button button-primary wpos-button-full button-orange" href="<?php echo WTWP_PLUGIN_LINK_UPGRADE; ?>" target="_blank"><?php _e('Grab Testimonial Now', 'wp-testimonial-with-widget'); ?></a>
						</div><!-- .inside -->
					</div><!-- #general -->
				</div><!-- .meta-box-sortables -->
			</div><!-- #post-container-1 -->

		</div><!-- #post-body -->
	</div><!-- #poststuff -->
</div><!-- end .wptww-wrap -->