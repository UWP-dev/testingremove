<?php

defined( 'TVE_EDITOR_URL' ) || define( 'TVE_EDITOR_URL', get_template_directory_uri() . '/architect/' );

add_action( 'wp_enqueue_scripts', function () {
	$parent_style = 'parent-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [ $parent_style ], wp_get_theme()->get( 'Version' ) );
        
        global $post;
        $seo_page_id = get_field( 'seo_page_list','option' );
        if( in_array($post->ID, $seo_page_id) ){
            wp_enqueue_script(
		'circle-progress',
		get_stylesheet_directory_uri() . '/assets/js/circle-progress.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
            );
            wp_enqueue_script(
                   'gauge-js',
                   get_stylesheet_directory_uri() . '/assets/js/gauge.js',
                   array(),
                   wp_get_theme()->get( 'Version' )

           );
            wp_localize_script( 'gauge-js', 'gauge_object',
                array( 
                    'font_url' => get_stylesheet_directory_uri().'/assets/fonts/'
                )
            );
            wp_enqueue_script(
                    'pagespeed-js',
                    get_stylesheet_directory_uri() . '/assets/js/pagespeed.min.js',
                    array(),
                    wp_get_theme()->get( 'Version' ),
                    true
            );
             wp_localize_script( 'pagespeed-js', 'pagespeed_object',
                array( 
                    'font_url' => get_stylesheet_directory_uri().'/assets/fonts/'
                )
            );

            wp_enqueue_script(
                    'bootstrap-js',
                    get_stylesheet_directory_uri() . '/assets/js/bootstrap.js',
                    array(),
                    wp_get_theme()->get( 'Version' ),
                    true
            );
            wp_enqueue_script(
                    'sweetalert-js',
                    get_stylesheet_directory_uri() . '/assets/js/sweetalert.min.js',
                    array(),
                    wp_get_theme()->get( 'Version' ),
                    true
            );

            wp_enqueue_script(
                    'Chart-js',
                    get_stylesheet_directory_uri() . '/assets/js/Chart.min.js',
                    array(),
                    wp_get_theme()->get( 'Version' ),
                    FALSE
            );

            wp_enqueue_script(
                    'dbdomain-js',
                    get_stylesheet_directory_uri() . '/assets/js/dbdomain.js',
                    array(),
                    wp_get_theme()->get( 'Version' ),
                    true
            );

            wp_enqueue_script(
                    'custom-script',
                    get_stylesheet_directory_uri() . '/assets/js/custom-script.js',
                    array(),
                    time(),
                    true
           );
        wp_enqueue_style( 'twenty-font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array() );
        wp_enqueue_style( 'twenty-custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array());
        wp_enqueue_style( 'twenty-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array());
        wp_enqueue_style( 'twenty-www-css', get_stylesheet_directory_uri() . '/assets/css/www.css', array() );
        
        }
} );

add_action( "wp_enqueue_scripts", "include_custom_style" );
function include_custom_style(){
wp_enqueue_script( "fancybox-js", get_stylesheet_directory_uri() . "/lib/fancybox/jquery.fancybox-1.3.4.pack.js", array( 'jquery' ), '1.0.0');
wp_enqueue_script( "mousewheel-js", get_stylesheet_directory_uri() . "/lib/fancybox/jquery.mousewheel-3.0.4.pack.js", array( 'jquery' ), '1.0.0');

 wp_enqueue_script( "slick-min", get_stylesheet_directory_uri() . "/slider/js/slick.min.js",array( 'fancybox-js' ),'1.0.0');
   wp_enqueue_style( "fancybox-js", get_stylesheet_directory_uri() . "/lib/fancybox/jquery.fancybox-1.3.4.css");
  wp_enqueue_style( "slick-css", get_stylesheet_directory_uri() . "/slider/css/slick.css");
   wp_enqueue_script( "custom-js", get_stylesheet_directory_uri() . "/slider/js/custom.js",array( 'slick-min' ));

}
/*Slider shortcode*/
add_shortcode( 'slide_list', 'display_slide_list' );
function display_slide_list(){
	 global $content;
 	 ob_start(); ?>

 	 <div class="wrapper">
      <div class="carousel">
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_tys-2.png" alt="Ty's Nail Candy logo designed by north star design studio"></div>
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_welcomehome-2-1.png" alt="Welcome Home Mortgage LLC logo designed by north star design studio"></div>
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_accentaccurate-2.png" alt="accent accurate logo"></div>
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_kidsense-2.png" alt="kidsense therapy group logo"></div>
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_plantspavers-2.png" alt="Plants and pavers logo with phone number : 203 508 5784"></div>
        <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_anthonyhouse-2.png" alt="Hp Scaled anthonyhouse"></div>
         <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/07/nsds_logos_Hp_Scaled_rap-2-min.png" alt="rapoport psychological services logo designed by north star design studio"></div>
      </div>
</div> 

<?php

 $output = ob_get_clean();
	  return $output;
}

// Recent Post shortcode
function team_slider($atts) {
    global $content;
    ob_start();
    $a = shortcode_atts( array(
    ), $atts );
    ?>
     <div class="gimg-row gimg-slider">
     	<?php
     		if( have_rows('team','option') ):
          $count = 0;
        	while( have_rows('team','option') ) : the_row();
          $count = $count + 1;
          
            if(get_sub_field('team_image','option')):
          
            ?>
       				<div>
            		<a class="gimg-link" href="#team_<?php echo $count; ?>" data-fancybox="teamgallery" rel="ligthbox">
            			<div class="gimg-box">
            				<div class="gimg-img">
            					 <img src="<?php echo get_sub_field('team_image','option')['url']; ?>" alt="<?php echo get_sub_field('team_image','option')['alt']; ?>">

            				</div>
            			</div>
            		</a>
            		<div id="team_<?php echo $count; ?>" class="gimg-info">
            			<div class="img-sec">
                    <img src="<?php echo get_sub_field('team_image','option')['url']; ?>" title="<?php echo get_sub_field('team_image','option')['title']; ?>">
            				<?php
                     echo ((get_sub_field('team_url','option'))? '<a href="'.get_sub_field('team_url','option')['url'].'" target="'.get_sub_field('team_url','option')['target'].'" class="gimg-btn">'.((get_sub_field('team_url','option')["title"])?get_sub_field('team_url','option')["title"] : 'Visit Website').'</a>' : '');
                     ?>            				
            			</div>
            		</div>
  	           </div>
       				<?php
              endif;
     				endwhile;
     			endif;
     	    ?>
	       </div>
    <?php
    $output = ob_get_clean();
    return $output;
    }
add_shortcode('team_slider','team_slider');
if( function_exists('acf_add_options_page') ) {
acf_add_options_page(array(
		'page_title' 	=> 'Slider Settings',
		'menu_title'	=> 'Slider Settings',
		'menu_slug' 	=> 'theme-slider-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/*Brand Logo shortcode*/
add_shortcode( 'brand_logo_list', 'display_brand_logo' );
function display_brand_logo(){
	 global $content;
 	 ob_start(); ?>

 	 <div class="wrapper">
      <div class="brand-logo-carousel">
              <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_1e3d4b12549348df8d9fb32cb35a9fb8_mv2-300x168.jpg" alt="Pono business partners logo"></div>
              <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_6d141f6a5c2b415eab8608edd31040b2_mv2.jpg" alt="The healing den logo designed by north star design studio"></div>

              <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_64fb115a571e4f8db6cbdd77a549f4b4_mv2.jpg" alt="Kara mac's – a place to glow logo designed by north star design studio"></div>

              <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_61aee1add2864964a5252a3816fceb42_mv2.jpg" alt="Wolff home inspections logo designed by north star design studio"></div>

              <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_b40f91125f5146fd8a81024eb48c96f6_mv2.png" alt="Naturopathic family health logo designed by north star design studio"></div>
              
               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_e2b442cb509c4382baa9b471221ce1f2_mv2.jpg" alt="keeley abigail photography logo designed by north star design studio"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_daf65c4dcb874c6189e85abb7f970800_mv2.png" alt="lounge"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_f7520e16d42d484cb5a72b61a6b672cc_mv2.png" alt="Stewart renovation logo designed by north star design studio"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/04/125513036_2854174881537841_7891557062962555831_n-1536x1536.jpg" alt="crimson world travel logo designed by north star design studio"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_3a340f6cdcc748269a8ef5a3e3cc1d0c_mv2.jpg" alt="film-role"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_516857c1510940afaabce2e8772c5d2e_mv2.png" alt="Dj butters entertainment logo designed by north star design studio"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_ddb34d27771446eb969d2b24c2c33000_mv2.png" alt="black-sqirrel-foods"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_d081758ad785421e8b0fd1db1d435da1_mv2.png" alt="Mo B logo designed by North star design studio"></div>

               <div><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/cfa474_a1d8d9878d4e43ceb62f46d7588f5466_mv2-300x168.png" alt="Earthjoy we clean green logo designed by north star design studio"></div>
            </div>
</div> 

<?php

 $output = ob_get_clean();
	  return $output;
}
// function that runs when shortcode is called
function wpb_demo_shortcode() { 
 ?>
<form class="turboform" method="POST" action="https://www.northstardesign.studio/seo/domain" >
    <div class="input-group review">
      <input type="text" autocomplete="off" spellcheck="false" class="form-control" placeholder="Type Your Website Address" name="url">
      <span class="input-group-btn"> 
          <button class="btn btn-green" type="submit" id="review-btn"><span class="glyphicon glyphicon-search"></span> REVIEW</button>
      </span>
    </div>
</form>
<?php
} 
// register shortcode
//add_shortcode('seo-audit', 'wpb_demo_shortcode');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
include 'seo-template/seo-function.php';