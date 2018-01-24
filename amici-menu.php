<?php
/**
* Template Name: Menu
*/
get_header(); ?>
<!--================================== Banner ================================== -->
<div id="menu-banner" class="inside-banners">
	<div class="container">
		<div class="col-md-6">
			<h2 class="black">MENUS</h2>
			
		</div>
	</div>
</div>
<div id="menu-listing" class="section">
	<div class="container">
	<?php /*=========== Menu list ===========*/
    $postType = 'menu-list';
    $criteria = array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'=>'ASC',
    );
    $result = new WP_Query( $criteria ); 
            
    if($result->have_posts()):?>
    <?php while($result->have_posts()):$result->the_post(); ?>
    <div class="col-md-4">
    <div class=" food-menu-item" style="background-image: url(<?php the_post_thumbnail_url( 'thumbnail' ); ?>)">
			<a href="<?php echo get_permalink(); ?>"><div class="hover-overlay">
				  <p class="white">See More</p>
			</div></a>
	</div>

	<h4 class="menu-title"><a class="hvr-underline-from-left" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>

	</div>
	 <?php endwhile;  endif; wp_reset_query();?>


		<!-- <div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-8 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu2.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div>
		<div class="col-md-4 food-menu-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/menu1.png);">
			<div class="hover-overlay">
				<p class="white">See More</p>
			</div>
		</div> -->
	</div>
</div>
<a href="/contact" class="enquire-now-btn">Get A Quote</a>
<div id="award" class="section contact-award">
	<div class="container">
		<div class="row">
			<h2 class="text-center black b-gap">AWARDS</h2>
			<div class="col-md-15">
				<img class="img-responsive award-img first-img" src="<?php bloginfo('template_directory'); ?>/img/award1.png">
			</div>
			<div class="col-md-15">
				<img class="img-responsive award-img" src="<?php bloginfo('template_directory'); ?>/img/award2.png">
			</div>
			<div class="col-md-15">
				<img class="img-responsive award-img" src="<?php bloginfo('template_directory'); ?>/img/award3.png">
			</div>
			<div class="col-md-15">
				<img class="img-responsive award-img" src="<?php bloginfo('template_directory'); ?>/img/award4.png">
			</div>
			<div class="col-md-15">
				<img class="img-responsive award-img last-img" src="<?php bloginfo('template_directory'); ?>/img/award5.png">
			</div>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>