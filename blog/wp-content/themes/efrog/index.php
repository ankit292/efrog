<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JimsFresh
 * @subpackage JimsFresh
 * @since JimsFresh 1.0
 */
get_header(); ?>
    <!-- <section class="hero-unit">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php 
            		// The Query
					// Get only Homepage slider category post
					// $slider_query = new WP_Query('cat=5');
					// if ( $slider_query->have_posts() ) : 
					// 	while ( $slider_query->have_posts() ) : 
                    //         $slider_query->the_post();
					?>
                <div class="swiper-slide">
                    <a href="<?php //the_permalink(); ?>">
                        <?php //the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        <div class="col-xs-12 caption">
                            <div class="col-sm-6 title">
                                <h1><?php //the_title(); ?></h1>
                            </div>
                            <div class="col-sm-6 right-area truncate">
                                <div class="date">
                                    <?php //the_time('F jS, Y'); ?>
                                </div>
                                <div class="category hide">
                                    <?php //the_category(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            		//endwhile;
        		// endif;
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="swiper-pagination"></div> 
    </section>-->
    
    <section class="blog-area main-area">
        
            <div class="col-md-6 col-lg-8 main">
                <div class="wrapper two-columns">
                    <?php 
                	// Exclude Homepage Slider category(Cat id = 5) from below loop
					//$query = new WP_Query( 'cat=-5' );
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
 					$query = new WP_Query(array( 'cat' => -0, 'paged'=> $paged ));
                	if ( $query->have_posts() ) : 
					// Start the loop.							
						while ( $query->have_posts() ) : 
							$query->the_post();
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
							// 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
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