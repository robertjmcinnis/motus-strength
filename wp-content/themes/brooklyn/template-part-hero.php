<?php 
    
if( is_front_page() /* settings > reading > Front page */
    || is_home() /* settings > reading > Posts page */
    || ( get_post_meta( get_the_ID() , 'ut_activate_page_hero' , true ) == 'on' && !ut_is_shop() ) /* all other pages except woocommerce main shop page / portfolio */
    || ( is_singular('portfolio') && get_post_meta( get_the_ID() , 'ut_activate_page_hero' , true ) != 'off' ) /* portfolio plugin  */
    || ( ut_is_shop() && get_post_meta( get_option('woocommerce_shop_page_id') , 'ut_activate_page_hero' , true ) == 'on' ) /* woocommerce main shop page  */
) : 


/* get hero template part based on hero type */
get_template_part( 'partials/hero', ut_return_hero_config('ut_hero_type') );  ?>

<?php
$posts = get_posts(array(
	'numberposts'	=> -1,
	'post_type'		=> 'event',
	'meta_key'		=> 'event_featured',
	'meta_value'	=> '1'
));
?>

<?php while ( have_posts() ) : the_post(); ?>

<?php if( get_field('event_featured') ) { ?>
    <div class="featuredEvent-home">
		<a href="/event">
			<div class="featuredEvent-homeImageContainer">
				<img class="featuredEvent-homeImage" src="<?php the_field('event_image'); ?>">
			</div>
			<div class="featuredEvent-homeInfo">
				<h3 class="featuredEvent-homeTitleHeading">FEATURED EVENT</h3>
				<h3 class="featuredEvent-homeTitle"><?php the_field('event_title'); ?></h3>
				<!-- <div class="featureEvent-homePromoCopy"><?php //the_field('event_featured_description'); ?></div>  -->
			</div>
		</a>
	</div>
<?php 
wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
} 

?>





		

<?php endwhile; // end of the loop. ?>

<div class="clear"></div>      
       
<?php endif; ?>