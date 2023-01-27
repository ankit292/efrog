<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section class="blog-area main-area category-page">
        
            <div class="col-sm-8 main">           

		<?php if ( have_posts() ) : ?>
			<div class="col-xs-12">
				<div class="category-heading">
					<h1 class="page-title">
						<?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
					</h1>
				</div>
			</div>
			<div class="clearfix">&nbsp;</div>
			<div class="wrapper two-columns">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
				<div class="item">
	                <div class="col">
	                    <div class="row">
	                        <div class="col-xs-12 main">
	                            <a href="<?php the_permalink() ?>">
	                                <div class="img-area">
	                                    <?php the_post_thumbnail(); ?>
	                                </div>
	                                <div class="heading">
	                                    <h2><?php the_title(); ?></h2>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="col-xs-12 right-area">
	                            <div class="category truncate">
	                                <a href="javascript:;">
	                                    <?php the_category(', '); ?>
	                                </a>
	                            </div>
	                            <div class="date truncate">
	                                <img src="common/img/calendar-black.svg" alt="" title="" width="18">
	                                <?php the_time('F jS, Y'); ?>
	                            </div>
	                        </div>
	                        <div class="col-xs-12">
	                            <div class="black-text">
	                                <?php the_excerpt(); ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                	<a href="<?php the_permalink() ?>" class="read">
                        Read more
                        <i aria-hidden="true" class="fa fa-long-arrow-right"></i>
                    </a>
            	</div>
            <?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */

				//get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				//'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
