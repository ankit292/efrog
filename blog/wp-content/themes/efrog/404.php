<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section class="blog-area main-area category-page error-page">
        
            <div class="col-sm-8 main"> 

			<div class="col-xs-12 wrapper text-center">
				
				<div class="clearfix">&nbsp;</div>
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/img/error-404.svg" alt="404 Error" title="404 Error" width="200">
				</div>

				<div class="clearfix">&nbsp;</div>

				<div class="col-xs-12">
					<h2 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h2>
				</div>

				<div class="clearfix">&nbsp;</div>

				<div class="col-xs-12">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>				
					<?php //get_search_form(); ?>
				</div>
			</div>
			
			<div class="clearfix visible-xs">&nbsp;</div>
		
		<?php get_sidebar( 'content-bottom' ); ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
