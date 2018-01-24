<?php
/**
* Template Name: Contact
*/
get_header(); ?>
<!--================================== Banner ================================== -->
<div id="contact-banner" class="inside-banners">
	<div class="container">
		<div class="col-md-6">
			<h2 class="white">CONTACT</h2>
			<!-- <p class="white">Please edit copy - If you’d like to talk about working together, we’d love to hear from you. The best and most effective method is by email, so simply complete our contact form or drop us a line via <a href="mailto:sales@amici.com.sg;" class="banner-mail">sales@amici.com.sg</a></p> -->
			<p>Let’s talk about making event experiences unforgettable.</p>
			<p>To plan one, email <a href="mailto:sales@amici.com.sg;" class="banner-mail"><em>sales@amici.com.sg</em></a><br>
				To partner with us for an event, email <a href="mailto:marketing@amici.com.sg;" class="banner-mail"><em>marketing@amici.com.sg</em></a><br>
			To work with us, email <a href="mailto:hr@amici.com.sg;" class="banner-mail"><em>hr@amici.com.sg</em></a></p>
			
		</div>
	</div>
</div>
<div id="form-section" class="section contact-form-section">
	<div class="container">
		<div class="col-md-4">
			<p class="f-t"><strong>ADDRESS</strong></p>
			<p class="f-d">FoodXchange <br>
				8A Admiralty Street #06-02<br>
			Singapore 757437</p>
			<p class="f-t"><strong>CALL US</strong></p>
			<p class="f-d"><a href="tel:+65 6542 5679">+65 6542 5679</a></p>
			<p class="f-t"><strong>EMAIL</strong></p>
			<p class="c-email"><a href="mailto:sales@amici.com.sg"><em>sales@amici.com.sg</em></a></p>
			<p class="c-email"><a href="mailto:hr@amici.com.sg"><em>hr@amici.com.sg</em></a></p>
			<p class="c-email"><a href="mailto:marketing@amici.com.sg"><em>marketing@amici.com.sg</em></a></p>
			<p class="c-email"><a href="mailto:enquiry@amici.com.sg"><em>enquiry@amici.com.sg</em></a></p>
		</div>
		
		
		<div class="col-md-8">
			<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
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