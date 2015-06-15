<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package unitedthemes
 */
?>
	<div class="grid-container event--archive">
	    <div class="grid-80 mobile-grid-100 tablet-grid-100 push-10">
	    	<div class="grid-container grid-container--event">
		    	<div class="grid-35 mobile-grid-100 tablet-grid-35">
					<a href="<?php echo get_permalink(); ?>"><img class="event-image" src="<?php the_field('event_image'); ?>" /></a>	
		    	</div>

		    	<div class="grid-65 mobile-grid-100 tablet-grid-65">
		    		<?php if(get_field('event_title')):  ?>
			    		<header class="page-header">
							<h1 class="event-title"><a href="<?php echo get_permalink(); ?>"><?php the_field('event_title'); ?></a></h1> 
						</header>	
					<?php endif; ?>
					<?php if(get_field('event_description')):  ?>
						<div class="event-description">
							<?php the_field('event_description'); ?>
						</div>
					<?php endif; ?>

					<div class="event-footer">
						<?php if(get_field('event_date')):  ?>
							<div class="event-date event-meta"><div class="meta-label">Date: </div><div class="event-data"><?php the_field('event_date'); ?></div></div>
						<?php endif; ?>
						<?php if(get_field('event_time')):  ?>
							<div class="event-contact event-meta"><div class="meta-label">Time: </div><div class="event-data"><?php the_field('event_time'); ?></a></div>
						<?php endif; ?>
						<a href="<?php echo get_permalink(); ?>"  class="event-button ut-btn theme-btn small">More</a>
					</div>
		    	</div>
		    </div>
		</div>
	</div>
</div>

<div class="page-content clearfix">

</div><!-- .page-content -->

