<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/jims-logo.gif">
        <link rel="shortcut icon" href="http://www.efrog.com.au/images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/swiper.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> id="<?php the_title(); ?>">
        <div id="page " class="site">
            <div class="site-inner ">
                <a class="skip-link screen-reader-text" href="#content">
                    <?php _e( 'Skip to content', 'twentysixteen' ); ?>
                </a>
               <header id="masthead" class="header inner-header cartpage-header bottom_header fw fixed-header site-header sticky " role="banner" style="padding:0px; margin:0px;"><!--header start-->  
  <div class="bottom_header fw">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-lg-2 col-xs-6 col-sm-3 logo_block"> 
         <a href="">
            <img src="https://www.efrog.com.au/images/logo.png" width="102" alt="">
          </a>  
       
          </div>

          <div class="col-md-7 col-lg-6 col-sm-2 col-xs-2 pos_static pull-right">
          <div class="menu_sec">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="navbar-header cart-navbar-header">
                <button type="button" class="navbar-toggle collapsed mobile_btn"> 

                  <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>


                   </button>
              </div>
              <div class="device_menu" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                  <li class="active"><a href="http://www.efrog.com.au/">Home</a></li>
                  <li><a href="http://www.efrog.com.au/about-us.html">About Us</a></li>
				 <li>
                                          <a href="javascript:void(0)">Services</a>
                                            <ul class="dropdown_nav">
                                                <li>
                                                    <a href="http://www.efrog.com.au/mobile-app-development.html">
                                                        <i><img src="http://www.efrog.com.au/images/menu/md.svg" alt="" width="14"></i> 
                                                    Mobile App Development</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.efrog.com.au/website-design-development.html">
                                                    <i><img src="http://www.efrog.com.au/images/menu/wd.svg" alt="" width="16"></i>
                                                Website Design Development</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.efrog.com.au/software-development.html">
                                                        <i><img src="http://www.efrog.com.au/images/menu/sd.svg" alt="" width="20"></i>

                                                    Software Development</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.efrog.com.au/digital-marketing.html">
                                                        <i><img src="http://www.efrog.com.au/images/menu/dm.svg" alt="" width="22"></i>

                                                    Digital Marketing</a>
                                                </li>
                                            </ul>

                                        </li>
                  <li> <a href="http://www.efrog.com.au/our-work.html">Our Work</a></li>
                  <li><a href="http://www.efrog.com.au/contact-us">Contact Us</a></li>
                  
                
                  <li class="hidden-lg  hidden-md mobile-social-icon"> <a href="https://www.facebook.com/efrogconsultancy/" target="_blank"> <i class="fa fa-facebook"></i></a> <a href="https://instagram.com/efrogconsultancy/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="https://www.linkedin.com/company/efrog-consultancy/" target="_blank"> <i class="fa fa-linkedin"></i></a> <a href="https://twitter.com/Efrogau" target="_blank"> <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </nav>            
             </div>
        </div>
        <!-- <div class="col-md-4 col-sm-6 col-xs-12">
        <?php
         // if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
              <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
              <?php //dynamic_sidebar( 'custom-header-widget' ); ?>
              </div>     
          <?php //endif; ?>
        </div> -->

      </div>
    </div>
  </div>
           
            <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
            <button id="menu-toggle" class="menu-toggle">
                <?php _e( 'Menu', 'twentysixteen' ); ?>
            </button>
            <div id="site-header-menu" class="site-header-menu">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                    <?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
                </nav>
                <!-- .main-navigation -->
                <?php endif; ?>
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                <nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                    <?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
                </nav>
		                <!-- .social-navigation -->
		                <?php endif; ?>
		            </div>
		            <!-- .site-header-menu -->
		            <?php endif; ?>
		        </div>
		        <!-- .site-header-main -->
		        <?php if ( get_header_image() ) : ?>
		        <?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
            <div class="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
            </div>
            <!-- .header-image -->
            <?php endif; // End header image check. ?>
            </header>
           <!-- New Creation -->
            <div class=" header-image-with-text">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/01/efrog-blog-images.jpg" class="img-responsive" >
            <div class="header-image-text">
             <div class="header_banner_text">
             
             </div>

            </div>
            </div>
            <!-- Breadcrumb -->
            <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            <!-- Breadcrumb END-->
            <!-- New Creation -->
            <!-- .site-header -->
            <div id="content" class="site-content">