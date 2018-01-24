<?php
/**
* Template Name: Stalk Us
*/
get_header(); ?>
<div id="stalk-us">
	<div class="container">
		<div id="instagram-section">
			<h2 class="black">INSTAGRAM</h2>
			<p class="black">@amicicatering</p>
			<?php echo do_shortcode('[instashow id="2"]') ?>
		</div>
		<div id="stalk-us-banner">
			<h5 class="su-banner">East beats west?<br>
			Let’s discuss.</h5>
		</div>
		<div id="stalk-us-social">

			<?php
$postType = 'post';
$criteria = array(
'post_type' => $postType,
'post_status' => 'publish',
'posts_per_page' => 1,
'order'=>'ASC',
);
$result = new WP_Query( $criteria );
if($result->have_posts()):?>

<?php while($result->have_posts()):$result->the_post(); ?>

			<div class="col-md-6 su-blog" >
			 <h2 class="blog-title-su"><a  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_the_title(); ?></a></h2>
				<img class="block-img img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">

				<p><?php the_content(); ?></p>
			</div>

			<?php endwhile;endif;wp_reset_query();?>

			<div class="col-md-6 fb-stream">
				

				<div class="fb-page" data-href="https://www.facebook.com/amicieventsNcatering/?fref=ts" data-tabs="timeline" data-width="670" data-height="850" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/amicieventsNcatering/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/amicieventsNcatering/?fref=ts">Amici Events and Catering</a></blockquote></div>
			</div>
		</div>
	</div>
</div>
<!-- ======================================= awards ===================================-->
<div id="award" class="section">
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