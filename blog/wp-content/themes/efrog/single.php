<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="blog-area main-area detail-page">
        
            <div class="col-sm-6 col-md-8 detail">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="blog_main_heading">
			<h1 class="main-title">
                    <?php the_title(); ?>
                  
                </h1>
                <span class="title-date">
                         <?php echo get_the_date(); ?>
                    </span>
		</div>
                <div class="user-detail">
                    <div class="person">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
                        <span class="post-content">by <b> <?php echo get_the_author(); ?></b></span>
                    </div>
                    <div class="category">
                        <div class="details-text">
                            <a target="_blank" href="/eat-au">
                                <span class="category-name"><?php the_category(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                <div class="clearfix">&nbsp;</div>
				<div class="post-description">
					 <?php the_content(); ?>
				</div>
				<?php 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
 
 <?php endwhile; ?>
<?php endif; 

		// Start the loop.
		while ( have_posts() ) : the_post();
			break;
			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	</div>

	<?php// get_sidebar( 'content-bottom' ); ?>
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
