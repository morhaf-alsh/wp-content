<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="figure style9">
      <div class="blockquote st-testimonial-content st-testimonial-bg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <span class="cp-load-after-post"></span>
      </div>
      <div class="star-author">
        <img width="440" height="320" class="attachment-full size-full wp-post-image" src="<?php echo plugins_url( '../../images/admin/user-thumb-'.$j.'.jpg', __FILE__ ) ?>" alt="<?php echo __('User '.$j, 'stars-testimonials'); ?>"/>
        <h5 class="st-testimonial-title"><?php echo $clientArray[$j-1]; ?></h5><span class="st-testimonial-company"><?php echo $companyArray[$j-1]; ?></span>
      </div>
    </div>
