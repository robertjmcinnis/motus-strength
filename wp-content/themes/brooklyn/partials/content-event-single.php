<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package unitedthemes
 */
?>
	<div class="grid-container event--single">
	    <div class="grid-100 mobile-grid-100 tablet-grid-100">
	    	<div class="grid-container">
	    		<h1><?php the_field('event_title'); ?></h1>
	    		<?php if(get_field('event_image')):  ?>
                	<img class="event-image" src="<?php the_field('event_image'); ?>" />
                <?php endif; ?>
	    		<h2 class="event-title"><span class="meta-label">Event Details</span></h2> 



			<div class="event-description">
				<?php the_content(); ?>
			</div>
			<div class="event-footer">

				<?php if(get_field('event_date')):  ?>
					<div class="event-date event-meta"><span class="meta-label">Date: </span><?php the_field('event_date'); ?></div>
				<?php endif; ?>
				<?php if(get_field('event_time')): ?>
					<div class="event-contact event-meta"><span class="meta-label">Time: </span><?php the_field('event_time'); ?></div>
				<?php endif; ?>
				<?php if(get_field('event_link')): ?>
					<div class="event-date event-meta"><span class="meta-label">Link: </span><a href="<?php echo 'http://'; the_field('event_link'); ?>"><?php the_field('event_link'); ?></a></div>
				<?php endif; ?>
				<?php if(get_field('event_email')): ?>
					<div class="event-date event-meta"><span class="meta-label">Email: </span><?php the_field('event_email'); ?></div>
				<?php endif; ?>
				<?php if(get_field('event_phone')): ?>
					<div class="event-date event-meta"><span class="meta-label">Phone: </span><?php the_field('event_phone'); ?></div>
				<?php endif; ?>
			</div>
		    	
		    </div>
		</div>
	</div>


<div class="page-content clearfix">

</div><!-- .page-content -->

