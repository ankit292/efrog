<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div>
		<!-- .site-content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
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
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
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

			<div class="site-info hidden">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a> -->
			</div><!-- .site-info -->


<!--=================== HTML========================== -->
<div class="inner_container">
        <div class="row top_footer">
            <div class="col-lg-4 one animated">
                <h3>About Efrog</h3>
                <p>EFrog is a award-winning software development company in Melbourne, Australia that aims to provide you with specialized web design, web development, mobile development, custom software development and digital marketing services. Our team comprises of top Web designers, developers, and digital marketers who have been experts
					<a href="http://www.efrog.com.au/#aboutEfrog" class="read_more_link">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
				</p>
                
            </div>
            <div class="col-md-3 two animated">
                <h3>Our service</h3>
                <ul class="links">
                    <li><a href="http://www.efrog.com.au/#horizontalTab">Software Development Service</a></li>
					<li><a href="http://www.efrog.com.au/#horizontalTab">Web Design & Development Service</a></li>
					<li><a href="http://www.efrog.com.au/#horizontalTab">Mobile Development Service</a></li>
					<li><a href="http://www.efrog.com.au/#horizontalTab">Business Automation</a></li>
					<li><a href="http://www.efrog.com.au/#horizontalTab">Digital Marketing</a></li>
                </ul>
            </div>
            <div class="col-md-3 three animated">
                <h3>Business Guides</h3>
<?php dynamic_sidebar( 'sidebar-2' ); ?>

            </div>
            <div class="col-md-2 col-sm-3 four animated">
                <h3>Follow Us</h3>
                <ul class="social">
                    <li><a href="https://www.facebook.com/efrogconsultancy/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/efrog-consultancy/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/Efrogau" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
      
                <!---->
                <!---->
                <!---->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 copyright_sec">
                <p>Copyright © 2020 Efrog. All rights reserved.</p>
            </div>
        </div>
    </div>
<!--=================== HTML========================== -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<div id="footerCoockies" class="cookies-policy cookies-policy_bg">
    <div class="cookies-policy_wrap ">
        <div class="cookies-policy_img">
            <img alt="Custom Software & Website Development Company in Melbourne, Australia - Efrog" height="35" src="http://www.efrog.com.au/blog/wp-content/uploads/2020/01/logo.png"></div>
            <div class="cookies-policy_content">
                <p>We use cookies to improve your experience on our site and to show you personalised advertising. <!--To find out more, read our <a href="#">privacy policy</a>.--></p>
            </div>
            <button class="cookies_btn raised hoverable" onclick="acceptCookies();">
                <span class="inline-tick inline-icon">
                    <svg fill="#fff" height="8.608" viewBox="0 0 10.79 8.608" width="10.79"><path d="M2.987 6.575L10.244 0l.546.532-7.803 8.076h-.26L0 4.788l.545-.546 2.442 2.333z"></path>
                    </svg>
                </span>
                    <span> I'm OK with that</span>
                </button>
            </div>
        </div>
<script>
	$(document).ready(function(){
		function acceptCookies(){
  $('#footerCoockies').hide();
  localStorage.setItem('cookiesInfo','accepted');
}
	$('.mobile_btn').on('click',function(){
		$('.device_menu').slideToggle();
	});
 if(localStorage.getItem('cookiesInfo')){
      $('#footerCoockies').hide();
    }
		function acceptCookies(){
  $('#footerCoockies').hide();
  localStorage.setItem('cookiesInfo','accepted');
}
});
	function acceptCookies(){
  $('#footerCoockies').hide();
  localStorage.setItem('cookiesInfo','accepted');
}
</script>
</body>
</html>
