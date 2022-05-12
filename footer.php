<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}
if ( ! is_admin() ) {
?>
<script>
  jQuery(document).ready(function() {
	  if(jQuery('body').hasClass('.tcb-editor-main')){}else{
    setTimeout(function() {
      equalhight();
    }, 2000);
	  }
  });
  jQuery(window).resize(function() {
	  if(jQuery('body').hasClass('.tcb-editor-main')){}else{
    setTimeout(function() {
      equalhight();
    }, 2000);
	  }
  });

  function equalhight() {
    var ctatitle = 0;
    jQuery(".plan-section .thrv-columns:nth-child(1) p").each(function() {
      console.log(ctatitle);
      if (jQuery(this).height() > ctatitle) {
        ctatitle = jQuery(this).height();
      }
    });
    jQuery(".plan-section .thrv-columns:nth-child(1) p").height(ctatitle);


    var ctatitle1 = 0;
    jQuery(".plan-section .thrv-columns:nth-child(2) p").each(function() {
      if (jQuery(this).height() > ctatitle1) {
        ctatitle1 = jQuery(this).height();
      }
    });
    jQuery(".plan-section .thrv-columns:nth-child(2) p").height(ctatitle1);


    var ctatitle2 = 0;
    jQuery(".plan-section-2 .thrv-columns:nth-child(1) p").each(function() {

      if (jQuery(this).height() > ctatitle2) {
        ctatitle2 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-2 .thrv-columns:nth-child(1) p").height(ctatitle2);


    var ctatitle3 = 0;
    jQuery(".plan-section-2 .thrv-columns:nth-child(2) p").each(function() {
      if (jQuery(this).height() > ctatitle3) {
        ctatitle3 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-2 .thrv-columns:nth-child(2) p").height(ctatitle3);
    
    var ctatitle4 = 0;
    jQuery(".plan-section-3 .thrv-columns:nth-child(1) p").each(function() {

      if (jQuery(this).height() > ctatitle4) {
        ctatitle4 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-3 .thrv-columns:nth-child(1) p").height(ctatitle4);
    
    var ctatitle5 = 0;
    jQuery(".plan-section-4 .thrv-columns:nth-child(1) p").each(function() {

      if (jQuery(this).height() > ctatitle5) {
        ctatitle5 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-4 .thrv-columns:nth-child(1) p").height(ctatitle5);
    
    var ctatitle6 = 0;
    jQuery(".plan-section-5 .thrv-columns:nth-child(1) p").each(function() {

      if (jQuery(this).height() > ctatitle6) {
        ctatitle6 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-5 .thrv-columns:nth-child(1) p").height(ctatitle6);
    
    
     var ctatitle7 = 0;
    jQuery(".plan-section-7 .thrv-columns:nth-child(2) p").each(function() {

      if (jQuery(this).height() > ctatitle7) {
        ctatitle7 = jQuery(this).height();
      }
    });
    jQuery(".plan-section-7 .thrv-columns:nth-child(2) p").height(ctatitle7);
  }
 
jQuery(".subscribe-to-receive input").attr('checked','checked');
	jQuery(".checkbox-605 input").attr('checked','checked');
// jQuery(".subscribe-to-receive input").attr("disabled", true);

  <?php 
    if(is_category() || is_tag())
    {
       $blog_post_url = get_permalink( get_option( 'page_for_posts' ) );
       ?>
        jQuery('.thrive-breadcrumbs li.home a').attr('href', '<?php echo $blog_post_url; ?>');
        jQuery('.thrive-breadcrumbs li.home a span').text('Blog');
       <?php
    }
    ?>
</script>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->

<?php }  wp_footer(); ?>

</body>
</html>