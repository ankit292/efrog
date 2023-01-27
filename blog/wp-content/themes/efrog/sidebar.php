<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	    <aside class="col-md-6 col-lg-4 sidebar">
	        <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	        <aside id="secondary" class="sidebar widget-area" role="complementary">
	            <?php dynamic_sidebar( 'sidebar-1' ); ?>
	            	 
	        </aside>
	        <!-- .sidebar .widget-area -->
	        <?php endif; ?>
	    </aside>
	</div>
</section>