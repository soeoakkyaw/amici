<?php
/**
* Template Name: Event
*/
get_header(); ?>
<div id="events-page">
	<div class="container black">
		<div class="event-section">
			<h2 class="black">GALLERY</h2>
			<div id="tabs" class="black">
				<ul>
					<li><a href="#tabs-1">BUFFET</a></li>
					<li><a href="#tabs-2">CANAPE</a></li>
					<li><a href="#tabs-3">FINE DINING</a></li>
					<li><a href="#tabs-4">WEDDINGS</a></li>
				</ul>
				<div id="tabs-1">
					<?php /*=========== Buffet ===========*/
					$postType = 'event-items';

					$criteria = array(
					'post_type' => $postType,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'category_name' => 'buffet',
					
					'order'=>'ASC',
					);
					$result = new WP_Query( $criteria );
					
					if($result->have_posts()):?>
					<?php while($result->have_posts()):$result->the_post(); ?>
					<div class="col-md-3 event-items">
						<a href="<?php the_post_thumbnail_url( 'large' ); ?>" class="event-colorbox"><img class="img-responsive" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"></a>
					</div>
					<?php endwhile;  endif; wp_reset_query();?>
					
				</div>
				<div id="tabs-2">
					<?php /*=========== Buffet ===========*/
					$postType = 'event-items';

					$criteria = array(
					'post_type' => $postType,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					
					'category_name' => 'canape',
					
					'order'=>'ASC'
					);
					$result = new WP_Query( $criteria );
					
					if($result->have_posts()):?>
					<?php while($result->have_posts()):$result->the_post(); ?>
					<div class="col-md-3 event-items">
						<a href="<?php the_post_thumbnail_url( 'large' ); ?>" class="event-colorbox"><img class="img-responsive" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"></a>
					</div>
					<?php endwhile;  endif; wp_reset_query();?>
					
				</div>
				<div id="tabs-3">
					<?php /*=========== fine-dining ===========*/
					$postType = 'event-items';

					$criteria = array(
					'post_type' => $postType,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					
					'category_name' => 'fine-dining',
					'order'=>'ASC',
					);
					$result = new WP_Query( $criteria );
					
					if($result->have_posts()):?>
					<?php while($result->have_posts()):$result->the_post(); ?>
					<div class="col-md-3 event-items">
						<a href="<?php the_post_thumbnail_url( 'large' ); ?>" class="event-colorbox"><img class="img-responsive" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"></a>
					</div>
					<?php endwhile;  endif; wp_reset_query();?>
					
				</div>
				<div id="tabs-4">
					<?php /*=========== weddings ===========*/
					$postType = 'event-items';

					$criteria = array(
					'post_type' => $postType,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					
					'category_name' => 'weddings',
					'order'=>'ASC',
					);
					$result = new WP_Query( $criteria );
					
					if($result->have_posts()):?>
					<?php while($result->have_posts()):$result->the_post(); ?>
					<div class="col-md-3 event-items">
						<a href="<?php the_post_thumbnail_url( 'large' ); ?>" class="event-colorbox"><img class="img-responsive" src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>"></a>
					</div>
					<?php endwhile;  endif; wp_reset_query();?>
					
				</div>
			</div>
			<div class="ttu">
				<p class="black text-center">Talk to us. Share your vision, and we will make it happen for you, and your guests to experience gourmet wonders for every moment.</p>
				<a href="/contact" class="enquire-now-btn">ENQUIRE NOW</a>
			</div>
		</div>
		
		
	</div>
</div>
<!-- ======================================= awards ===================================-->
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