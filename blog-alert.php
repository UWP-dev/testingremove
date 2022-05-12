  <?php   $latest_post = get_posts( 'numberposts=5&order=DESC&post_status=publish' );
            $blog_image_one = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_post[0]->ID ), 'large' );
            $blog_image_two = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_post[1]->ID ), 'large' );
            $blog_image_three = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_post[2]->ID ), 'large' );
            $blog_image_four = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_post[3]->ID ), 'large' );
            $blog_image_five = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_post[4]->ID ), 'large' );
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	    <title>NEW BLOG ALERT</title>
	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	    <style type="text/css">
	    	*{box-sizing: border-box;margin: 0px;padding: 0px;}
	    	img { max-width: 100%;}
	    	body{ font-family: 'Montserrat', sans-serif;}
	    	a{ text-decoration: none !important; }
	    	a,a span{transition: .3s all ease-in;}
	    	a:hover span, a:hover img{opacity: .8;}
	    	a:hover span.common-btn{background-color:transparent !important; color: #000 !important; border:2px solid #000 !important; opacity: 1;}	    
	    	.common-btn:hover span{opacity: 1; color: #fff !important;}
	    	.common-btn:hover{background: #0F0F0F !important;}
	    	@media only screen and (max-width: 767px) {
	    		.banner-content{padding-bottom: 10px !important;}
	    		.footer-logo-tr > td.social-icon-td tr td { margin: 0px !important;}
	    		.blog-main > td, .footer-logo-tr > td { width: 100% !important; display: block; margin-bottom: 19px !important; padding-left: 0px !important; padding-right: 0px !important;}
				.begin-table { width: 100% !important;}				
				tbody,table,tr,td{display: block !important; margin-left: auto !important; margin-right: auto !important;}	
				.footer-logo-tr > td.social-icon-td tr{ display: flex !important;align-items: center; justify-content: center;}
				p { padding-left: 5px; padding-right: 5px;}
				.blog-head{padding-left: 0px; padding-right: 0px; padding-bottom: 10px !important;}	 
				.footer-logo-tr{text-align: center;}
				.footer-bg{    padding: 20px 20px 5px !important; }
				.highlight-text{padding: 15px !important;}
				.blog-head,.blog-text{min-height:auto !important;}
			}   		
			@media only screen and (max-width: 365px) {
				.banner table, .banner-content{ width: 100% !important;}
				br{display: none;}
			}
	    </style>
	</head>
	<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" bgcolor="#f1f1f1">
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" id="bodyTable" style="height:100%;">
			<tr>
				<td align="center" valign="top" id="bodyCell">
					<!-- BEGIN TEMPLATE // -->
          			<table class="begin-table" border="0" cellpadding="0" cellspacing="0" id="templateContainer" style="width:600px;border:0px solid #ccc;border-collapse:collapse !important;font-family: 'Montserrat', sans-serif;">
          				<tr>
				            <td align="center" valign="top">
				            	<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF" class="main-table">
									<tr>	
										<td style="background:url('https://www.northstardesign.studio/wp-content/uploads/2021/09/how-social-media-impacts-seo-3-1-1024x1024-1.png');background-size:cover;background-repeat:no-repeat;background-position:center center;">
											<table border="0" cellpadding="0" cellspacing="0" style="margin:0px auto;">
												<tr>
													<td>
														<p style="margin: 0px auto;background:#ffd300;width:222px;padding: 24px 10px;box-sizing:border-box;color: #0F0F0F;font-family: 'Montserrat', sans-serif;font-weight: 600;line-height: 15px;letter-spacing: 0.1em;text-align: center;"><span style="display: block;font-size: 12.5px;">#NSDSPROTIP</span><span style="display: block;font-size: 14.44px">- NEW BLOG ALERT- </span></p>
													</td>	
												</tr>
												<tr>
													<td class="banner" style="padding-top: 74px; padding-bottom: 71px;">
														<table border="0" cellpadding="0" cellspacing="0" style="width:340px;border:0px solid #ccc;border-collapse:collapse !important;font-family: 'Montserrat', sans-serif;">
															<tr>
																<td>
																	<p class="banner-head" style="color: #FFFFFF;font-family: 'Montserrat', sans-serif;font-weight: 500;line-height: 34.66px;letter-spacing: 0em;text-align: center;font-size: 28.88px;padding-bottom: 20px;"><?php echo $latest_post[0]->post_title; ?></p>														
																</td>
															</tr>
															<tr>	
																<td class="banner-content" width="340px" align="center" style="padding-bottom: 6px;">
																	<p class="banner-text" style="color: #FFFFFF;font-family: 'Montserrat', sans-serif;font-weight: 300;line-height: 17.33px;letter-spacing: 0em;text-align: center;font-size: 10.11px;"><?php echo get_post_meta($latest_post[0]->ID, '_yoast_wpseo_metadesc', true); ?></p>	
																</td>
															</tr>		
															<tr>
																<td align="center"> 
																	<a href="<?php echo get_permalink($latest_post[0]->ID); ?>" class="yellow-btn common-btn" target="_blank" style="display: inline-block;background: #FFD300;width: 98.74px;text-align: center; padding: 3px 3px 2px;box-sizing:border-box;">
															    		<span style="color: #000000;font-family: 'Montserrat', sans-serif;font-weight: 400;line-height: 17.33px;letter-spacing: 0em;text-align: center;font-size: 10.11px;display: inline-block;">READ MORE</span>
															    	</a>
																</td>
															</tr>	
														</table>
													</td>
												</tr>		
											</table>
										</td>
									</tr>		
									
									<tr>
										<td align="center">
											<table border="0" cellpadding="0" cellspacing="0" style="width:100%;border:0px solid #ccc;border-collapse:collapse !important;font-family: 'Montserrat', sans-serif;">
												<tr>
													<td class="footer-bg" style="background:url('https://www.northstardesign.studio/wp-content/uploads/2021/10/0e43a19a-3b6a-4c67-8b3f-897f88080bfb.jpeg');background-size:cover;background-repeat:no-repeat;background-position:center center;padding:30px;">
														<table border="0" cellpadding="0" cellspacing="0" style="width:100%;border:0px solid #ccc;border-collapse:collapse !important;font-family: 'Montserrat', sans-serif;">
														<tr class="footer-logo-tr">
															<td width="65%">
																<p><a href="#" target="_blank" style="display: inline-block;"><span style="display: block;background:url('https://content.app-us1.com/5rwRe/2021/10/01/d0bb8a32-8f15-4494-ba24-64ba2574d284.png');background-size:cover;background-repeat:no-repeat;background-position:center center;height:59px;width:279px;"></span></a></p>
															</td>
                                                                                                        <td class="social-icon-td" width="35%" align="right" style="padding-left: 87px;">
																<table align="center" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
									                              <tr>
									                                  <td style="padding-right: 20px;box-sizing:border-box;">
									                                  	<a href="https://www.facebook.com/NorthStarDesignStudio/" target="_blank" style="background:url('https://content.app-us1.com/5rwRe/2021/10/01/0704c90a-5ee1-4c14-8853-e7782395d547.png');background-size:cover;background-repeat:no-repeat;background-position:center center;width:11px;height: 21px;display:block;" target="_blank"></a>								                                    
									                                  </td>
									                                  <td style="padding-right: 20px;box-sizing:border-box;">
									                                      <a href="https://www.google.com/search?client=firefox-b-1-d&q=north+star+design+studio+milford+ct#lrd=0x89e80b579eff76e1:0x617ce61e7f673bc1,1,,,%20Alignable:%20https://www.alignable.com/milford-ct/north-star-design-studio" target="_blank" style="background:url('https://content.app-us1.com/5rwRe/2021/10/01/882a8740-b707-4b8c-9e80-0c3b4a79dad0.png');background-size:cover;background-repeat:no-repeat;background-position:center center;width:21px;height: 21px;display:block;" target="_blank"></a>
									                                  </td>
									                                  <td>
									                                  	<a href="https://www.linkedin.com/in/tdmeeker" target="_blank" style="background:url('https://content.app-us1.com/5rwRe/2021/10/01/e93fd8ab-c716-4e14-b5a7-579a365b9665.png');background-size:cover;background-repeat:no-repeat;background-position:center center;width:17px;height: 17px;display:block;" target="_blank"></a>   
									                                  </td>
									                              </tr>
									                          	</table>																
                                                                                                        </td>												
												</tr>
											</table>	
										</td>
									</tr>									
									<tr>
										<td align="center" style="padding: 10px 0px 9px;background: #FFD300;box-sizing:border-box;">	
											<p style="color: #0F0F0F;font-family: 'Montserrat', sans-serif;font-weight: 400;line-height: 13.86px;letter-spacing: 0.5em;text-align: center;font-size: 12px;" class="footer-sub-text">NORTHSTARDESIGN.STUDIO</p>
										</td>
									</tr>	
									<tr>
										<td align="center" style="padding: 20px 0px;background: #FFFFFF;box-sizing:border-box;">	
											 <p style="color: #0F0F0F;font-family: 'Montserrat', sans-serif;font-weight: 400;line-height: 17.33px;letter-spacing: 0em;text-align: center;font-size: 14.44px;text-transform: uppercase;"> 56 Honeycomb Lane, <br /> Milford CT 06461</p>
										</td>
									</tr>	
								</table>
							</td>
						</tr>	
				    </table>	
            	</td>
            </tr>	
        </table>
	</body>
</html>