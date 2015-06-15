<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unitedthemes
 */
global $wp_query;

get_header(); 

// $header_style = ot_get_option('ut_global_headline_style');

?>


<div class="grid-container">
<div id="primary" class="grid-parent grid-100 tablet-grid-100 mobile-grid-100">

				<?php if ( have_posts() ) : ?>
        			
                    <!-- page header -->
                    <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="page-header <?php echo $header_style;?>">
                        <h1 class="page-title"><span></span>Events</h1>


                        <?php
                            // Show an optional term description.
                            $term_description = term_description();
                            if ( ! empty( $term_description ) ) :
                                printf( '<p class="lead">%s</p>', $term_description );
                            endif;
                        ?>
                    </header>
                    </div><!-- .page-header -->
                    
                    
					<?php /* Start the Loop */ ?>
                    
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to overload this in a child theme then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'partials/content-event', get_post_format() );
                        ?>
        
                    <?php endwhile; ?>
                    
                    <?php /* end the Loop */ ?>                    
                            
                <?php else : ?>
        
                    <?php //get_template_part( 'no-results', 'archive' ); ?>

                    <h1 style="text-align: center;margin:100px 0;" >Sorry, there are no Events at this time.</h1>
                <?php endif; ?>
                               
        	</div><!-- #primary -->
        </div><!-- .grid-container -->

<?php if( $wp_query->max_num_pages > 1 ) : ?>
<div id="ut-blog-navigation">
	<div class="grid-container">
		<div class="grid-100">	
		<?php if ( have_posts() ) : ?>
			<?php unitedthemes_content_nav( 'nav-below' ); ?>
		<?php endif; ?>	
		</div><!-- .grid-100 -->  
	</div><!-- .grid-container -->
</div><!-- #ut-blog-navigation -->
<?php endif; ?>

<?php get_footer(); ?>