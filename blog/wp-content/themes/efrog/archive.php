<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section class="blog-area main-area category-page">
        
            <div class="col-sm-8 main">
                

		<?php if ( have_posts() ) : ?>

			<div class=" col-xs-12">
				<div class="category-heading">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );					
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</div>
			</div><!-- .page-header -->
			<div class="clearfix">&nbsp;</div>
			<div class="wrapper two-columns">
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			?>
			<div class="item">
                <div class="col">
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
                <a href="<?php the_permalink() ?>" class="read">
                    Read more
                    <i aria-hidden="true" class="fa fa-long-arrow-right"></i>
                </a>
            </div>
			<?php

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
