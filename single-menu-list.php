<?php
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/
get_header(); ?>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $menubanner=types_render_field( 'menu-banner', array('url' => 'true' ) );
if($menubanner){
?>
<!-- ======================= Banner ======================= -->
<div  class="menu-banner" style='background: url("<?php echo (types_render_field( 'menu-banner', array('url' => 'true' ) )); ?>");'>
	<div class="container">
		<div class="col-md-6">
			<h2 class="white"><?php the_title(); ?></h2>
			<p class="white"><?php the_content(); ?></p>
			
		</div>
	</div>
</div>
<?php } endwhile;endif;  ?>
<div class="relative-wrapper">
	<div class="menu-detail-wrapper container">
		<!-- ======================= Menu content ======================= -->
		<div class="menu-content-area col-md-6">
			<!-- accordtion start -->


			<div id="accordion">
				<?php
				$postType = 'menu-item';
				$criteria = array(
				'post_type' => $postType,
				'post_status' => 'publish',
				'meta_query' => array(array('key' => '_wpcf_belongs_menu-list_id', 'value' => get_the_ID())),
				'posts_per_page' => -1,
				'order'=>'DESC',
				);
				$result = new WP_Query( $criteria );
				if($result->have_posts()):
				while($result->have_posts()):$result->the_post(); ?>
				<!-- accordtion Title -->
				<div class="accordion-container">
					<h3 class="accordion-title">
					<div class="menu-item-title">
						<?php $catc=types_render_field( 'menu-cat', array() );
						if($catc){?>
						<h2 class="cat"><?php echo (types_render_field( "menu-cat", array( ) )); ?></h2>
						<?php }?>
						<div class="squaredOne">
							<input type="radio" value="<?php echo (types_render_field( "menu-title", array( ) )); ?>" class="cb primary-radio"  name="check" />
							<label><?php echo (types_render_field( "menu-title", array( ) )); ?></label>
							<p class="menu-price"><?php echo (types_render_field( "menu-price", array( ) )); ?></p>
							<p class="black actual-price"><?php echo (types_render_field( "menu-price-per-person-for-calculation", array( ) )); ?></p>
							<p class="black min-pax" id="min-pax"><?php echo (types_render_field( "minimum-guest", array( ) )); ?></p>

							<!-- ======================= Standard Menu Dish ID======================= -->
					
							<div class="black section-1-dish-id"><?php echo types_render_field( "section-1-dish-id", array() ); ?></div>
						

						</div>
					</div></h3>
					<!-- accordtion content start -->
					<div class="accordion-content">
						
						<?php $menu_desc=types_render_field( 'menu-description', array() );
						if($menu_desc){
						?>
						<div class="menu-desc"><?php echo (types_render_field( "menu-description", array("output"=>"html" ) )); ?></div>
						<?php }?>


					
						<!-- ======================= Standard Menu ======================= -->
						<?php $mb=types_render_field( 'section-1', array() );
						if($mb){

							echo types_render_field( "section-1", array() );
						 }?>

						



						<!-- ======================= Side Dish 1 Choose 1  ======================= -->
						<?php 

						$choose1=types_render_field( 'number-of-choice1', array() );
						//echo $choose1;
						if($choose1=="Choose 1"){

						$sdr=types_render_field( 'side-menu-1-title', array() );
						if($sdr){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text sub-m1">
								<p class="side-dish-title"><?php echo (types_render_field( "side-menu-1-title", array( ) )); ?></p>

								<p class="side-dish-desc"><?php echo (types_render_field( "side-menu-title-2", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $sidemenu1=types_render_field( "side-menu-text", array("index"=>0) );
									
									if($sidemenu1){
									?>
									
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>0) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?></label>
									
									<?php
									$side_desc1=types_render_field( "side-menu-1-description", array("index"=>0) );
									if($side_desc1){?>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>0) ); ?></p> <?php } ?>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu2=types_render_field( "side-menu-text", array("index"=>1) );
									
									if($sidemenu2){
									?>
									
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?></label>
									
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>1) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3=types_render_field( "side-menu-text", array("index"=>2) );
									
									if($sidemenu3){
									?>
									
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?></label>
									
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>2) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3_1=types_render_field( "side-menu-text", array("index"=>3) );
									
									if($sidemenu3_1){
									?>
									
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>3) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3_2=types_render_field( "side-menu-text", array("index"=>4) );
									
									if($sidemenu3_2){
									?>
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu3_3=types_render_field( "side-menu-text", array("index"=>5) );
									
									if($sidemenu3_3){
									?>
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu3_4=types_render_field( "side-menu-text", array("index"=>6) );
									
									if($sidemenu3_4){
									?>
									<input type="radio" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>
								
							</div>
						
						</div>
						<?php } } ?>


						<!-- ======================= Side Dish 1 Choose 2  ======================= -->
						<?php 

						$choose2=types_render_field( 'number-of-choice1', array() );
						//echo $choose2;
						if($choose2=="Choose 2"){

						$sdr=types_render_field( 'side-menu-1-title', array() );
						if($sdr){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text sub-m1">
								<p class="side-dish-title"><?php echo (types_render_field( "side-menu-1-title", array( ) )); ?></p>

								<p class="side-dish-desc"><?php echo (types_render_field( "side-menu-title-2", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $sidemenu1=types_render_field( "side-menu-text", array("index"=>0) );
									
									if($sidemenu1){
									?>
									
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>0) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>0) ); ?></label>
									
									<?php
									$side_desc1=types_render_field( "side-menu-1-description", array("index"=>0) );
									if($side_desc1){?>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>0) ); ?></p> <?php } ?>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu2=types_render_field( "side-menu-text", array("index"=>1) );
									
									if($sidemenu2){
									?>
									
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>1) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>1) ); ?></label>
									
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>1) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3=types_render_field( "side-menu-text", array("index"=>2) );
									
									if($sidemenu3){
									?>
									
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>2) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>2) ); ?></label>
									
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>2) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3_1=types_render_field( "side-menu-text", array("index"=>3) );
									
									if($sidemenu3_1){
									?>
									
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>3) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>3) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>3) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu3_2=types_render_field( "side-menu-text", array("index"=>4) );
									
									if($sidemenu3_2){
									?>
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>4) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu3_3=types_render_field( "side-menu-text", array("index"=>5) );
									
									if($sidemenu3_3){
									?>
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>5) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>


								<div class="checkbox-wrap">
									<?php $sidemenu3_4=types_render_field( "side-menu-text", array("index"=>6) );
									
									if($sidemenu3_4){
									?>
									<input data-dish1="<?php echo types_render_field( "side-menu-1-dish-id", array("index"=>6) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>' id='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?>'><?php echo types_render_field( "side-menu-text", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>
								
							</div>
						
						</div>
						<?php } } ?>




						


						<!-- ======================= Side Dish 2 Choose 1 ======================= -->
						<?php 

						$choose_sub2=types_render_field( 'number-of-choice2', array() );
						//echo $choose2;
						if($choose_sub2=="Choose 1"){

						$sdr2=types_render_field( 'side-menu-2-title', array() );
						if($sdr2){
						?>
						<div class="row side-dish-row">
							<div class="col-md-12 sidedish1-text sub-m2">
								
								<p class="side-dish-title"><?php echo (types_render_field( "side-menu-2-title", array( ) )); ?></p>
								<p class="side-dish-desc"><?php echo (types_render_field( "side-menu-2-description", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $sidemenu4=types_render_field( "side-menu-2", array("index"=>0)  );
									
									if($sidemenu4){
									?>
									
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>0) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>0) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu5=types_render_field( "side-menu-2", array("index"=>1)  );
									
									if($sidemenu5){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>1) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>1) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu6=types_render_field( "side-menu-2", array("index"=>2)  );
									
									if($sidemenu6){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>2) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?>' id='<?php echo types_render_field( "side-menu-2-description", array("index"=>2) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?>'>
									<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>2) ); ?></p>
									<?php } ?>
								</div>

								<!-- 4 more	 -->
								<div class="checkbox-wrap">
									<?php $sidemenu7=types_render_field( "side-menu-2", array("index"=>3)  );
									
									if($sidemenu7){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>3) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>3) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu8=types_render_field( "side-menu-2", array("index"=>4)  );
									
									if($sidemenu8){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>4) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu9=types_render_field( "side-menu-2", array("index"=>5)  );
									
									if($sidemenu9){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>5) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu10=types_render_field( "side-menu-2", array("index"=>6)  );
									
									if($sidemenu10){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>6) ); ?>" type="radio" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>
								
								
							</div>
					
						</div>
						<?php } } ?>


						<!-- ======================= Side Dish 2 Choose 2 ======================= -->
						<?php 

						$choose_sub2_2=types_render_field( 'number-of-choice2', array() );
						//echo $choose2;
						if($choose_sub2_2=="Choose 2"){

						$sdr2=types_render_field( 'side-menu-2-title', array() );
						if($sdr2){
						?>
						<div class="row side-dish-row">
							<div class="col-md-12 sidedish1-text sub-m2">
								
								<p class="side-dish-title"><?php echo (types_render_field( "side-menu-2-title", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $sidemenu4=types_render_field( "side-menu-2", array("index"=>0)  ); 
									
									if($sidemenu4){
									?>
									
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>0) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>0) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>0) ); ?></p>
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $sidemenu5=types_render_field( "side-menu-2", array("index"=>1)  );
									
									if($sidemenu5){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>1) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>1) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>1) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu6=types_render_field( "side-menu-2", array("index"=>2)  );
									
									if($sidemenu6){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>2) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>2) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>2) ); ?></p>
									<?php } ?>
								</div>

								<!-- 4 more	 -->
								<div class="checkbox-wrap">
									<?php $sidemenu7=types_render_field( "side-menu-2", array("index"=>3)  );
									
									if($sidemenu7){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>3) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>3) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>3) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu8=types_render_field( "side-menu-2", array("index"=>4)  );
									
									if($sidemenu8){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>4) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu9=types_render_field( "side-menu-2", array("index"=>5)  );
									
									if($sidemenu9){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>5) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $sidemenu10=types_render_field( "side-menu-2", array("index"=>6)  );
									
									if($sidemenu10){
									?>
									<input data-dish2="<?php echo types_render_field( "side-menu-2-dish-id", array("index"=>6) ); ?>" type="checkbox" name="menu2" value='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>' id='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?>'><?php echo types_render_field( "side-menu-2", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-dish-description-2", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>



							
								
								
							</div>
						
						</div>
						<?php } } ?>

	
						


						<!-- ======================= Beverage Menu Choose 1  ======================= -->
						<?php 

						$bm1=types_render_field( 'number-of-choice-for-beverage', array() );
						//echo $bm1;
						if($bm1=="Choose 1"){

						$sdr=types_render_field( 'beverage-selection-menu-title', array() );
						if($sdr){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text beverage-choose1">
								<p class="side-dish-title"><?php echo (types_render_field( "beverage-selection-menu-title", array( ) )); ?></p>

								<p class="side-dish-desc"><?php echo (types_render_field( "beverage-selection-menu-sub-title", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $beverage_menu1=types_render_field( "beverage-selection-menu", array("index"=>0) );
									
									if($beverage_menu1){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>0) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?></label>
									
								
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu2=types_render_field( "beverage-selection-menu-title", array("index"=>1) );
									
									if($beverage_menu2){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>1) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?></label>
									
									
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3=types_render_field( "beverage-selection-menu", array("index"=>2) );
									
									if($beverage_menu3){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>2) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?></label>
									
								
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3_1=types_render_field( "beverage-selection-menu", array("index"=>3) );
									
									if($beverage_menu3_1){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>3) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?></label>
									
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3_2=types_render_field( "beverage-selection-menu", array("index"=>4) );
									
									if($beverage_menu3_2){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>4) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $beverage_menu3_3=types_render_field( "beverage-selection-menu", array("index"=>5) );
									
									if($beverage_menu3_3){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>5) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $beverage_menu3_4=types_render_field( "beverage-selection-menu", array("index"=>6) );
									
									if($beverage_menu3_4){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>6) ); ?>" type="radio" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>
								
							</div>
					
						</div>
						<?php } } ?>



						<!-- ======================= Beverage Menu Choose 2  ======================= -->
						<?php 

						$bm2=types_render_field( 'number-of-choice-for-beverage', array() );
						//echo $bm1;
						if($bm2=="Choose 2"){

						$sdr=types_render_field( 'beverage-selection-menu-title', array() );
						if($sdr){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text beverage-choose2">
								<p class="side-dish-title"><?php echo (types_render_field( "beverage-selection-menu-title", array( ) )); ?></p>

								<p class="side-dish-desc"><?php echo (types_render_field( "beverage-selection-menu-sub-title", array( ) )); ?></p>
								<div class="checkbox-wrap">
									<?php $beverage_menu1=types_render_field( "beverage-selection-menu", array("index"=>0) );
									
									if($beverage_menu1){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>0) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>0) ); ?></label>
									
								
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu2=types_render_field( "beverage-selection-menu-title", array("index"=>1) );
									
									if($beverage_menu2){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>1) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>1) ); ?></label>
									
									
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3=types_render_field( "beverage-selection-menu", array("index"=>2) );
									
									if($beverage_menu3){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>2) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>2) ); ?></label>
									
								
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3_1=types_render_field( "beverage-selection-menu", array("index"=>3) );
									
									if($beverage_menu3_1){
									?>
									
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>3) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>3) ); ?></label>
									
									<?php } ?>
								</div>
								<div class="checkbox-wrap">
									<?php $beverage_menu3_2=types_render_field( "beverage-selection-menu", array("index"=>4) );
									
									if($beverage_menu3_2){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>4) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>4) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>4) ); ?></p>
									<?php } ?>
								</div>
								
								<div class="checkbox-wrap">
									<?php $beverage_menu3_3=types_render_field( "beverage-selection-menu", array("index"=>5) );
									
									if($beverage_menu3_3){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>5) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>5) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>5) ); ?></p>
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $beverage_menu3_4=types_render_field( "beverage-selection-menu", array("index"=>6) );
									
									if($beverage_menu3_4){
									?>
									<input data-beverage="<?php echo types_render_field( "beverage-menu-id", array("index"=>6) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>' id='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>'> <label for='<?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?>'><?php echo types_render_field( "beverage-selection-menu", array("index"=>6) ); ?></label>
									<p class="side-menu-desc"><?php echo types_render_field( "side-menu-1-description", array("index"=>6) ); ?></p>
									<?php } ?>
								</div>
							</div>
					
						</div>
						<?php } } ?>




						<!-- ======================= Additional Add on 1  ======================= -->
						<?php 



						$sdr=types_render_field( 'add-on-1-title', array() );
						if($sdr){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text addon1">
								<p class="side-dish-title"><?php echo (types_render_field( "add-on-1-title", array( ) )); ?></p>

								
								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "add-on-1-item", array("index"=>0) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-1-item-price", array("index"=>0) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-1-item", array("index"=>0) ); ?>' id='<?php echo types_render_field( "add-on-1-item", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-1-item", array("index"=>0) ); ?>'><?php echo types_render_field( "add-on-1-item", array("index"=>0) ); ?></label>
									
								
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $additional_addon2=types_render_field( "add-on-1-item", array("index"=>1) );
									
									if($additional_addon2){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-1-item-price", array("index"=>1) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-1-item", array("index"=>1) ); ?>' id='<?php echo types_render_field( "add-on-1-item", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-1-item", array("index"=>1) ); ?>'><?php echo types_render_field( "add-on-1-item", array("index"=>1) ); ?></label>
									
								
									<?php } ?>
								</div>
								

									<div class="checkbox-wrap">
									<?php $additional_addon3=types_render_field( "add-on-1-item", array("index"=>2) );
									
									if($additional_addon3){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-1-item-price", array("index"=>2) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-1-item", array("index"=>2) ); ?>' id='<?php echo types_render_field( "add-on-1-item", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-1-item", array("index"=>2) ); ?>'><?php echo types_render_field( "add-on-1-item", array("index"=>2) ); ?></label>
									
								
									<?php } ?>
								</div>
								

									<div class="checkbox-wrap">
									<?php $additional_addon4=types_render_field( "add-on-1-item", array("index"=>3) );
									
									if($additional_addon4){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-1-item-price", array("index"=>3) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-1-item", array("index"=>3) ); ?>' id='<?php echo types_render_field( "add-on-1-item", array("index"=>3) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-1-item", array("index"=>3) ); ?>'><?php echo types_render_field( "add-on-1-item", array("index"=>3) ); ?></label>
									
								
									<?php } ?>
								</div>
								
								
							
								
							</div>
					
						</div>
						<?php }  ?>



						<!-- ======================= Additional Add on 2  ======================= -->
						<?php 



						$add2=types_render_field( 'add-on-2-title', array() );
						if($add2){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text addon2">
								<p class="side-dish-title"><?php echo (types_render_field( "add-on-2-title", array( ) )); ?></p>

								
								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "add-on-2-item", array("index"=>0) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-2-price", array("index"=>0) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-2-item", array("index"=>0) ); ?>' id='<?php echo types_render_field( "add-on-2-item", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-2-item", array("index"=>0) ); ?>'><?php echo types_render_field( "add-on-2-item", array("index"=>0) ); ?></label>
									
								
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $additional_addon2=types_render_field( "add-on-2-item", array("index"=>1) );
									
									if($additional_addon2){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-2-price", array("index"=>1) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-2-item", array("index"=>1) ); ?>' id='<?php echo types_render_field( "add-on-2-item", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-2-item", array("index"=>1) ); ?>'><?php echo types_render_field( "add-on-2-item", array("index"=>1) ); ?></label>
									
								
									<?php } ?>
								</div>
								

									<div class="checkbox-wrap">
									<?php $additional_addon3=types_render_field( "add-on-2-item", array("index"=>2) );
									
									if($additional_addon3){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-2-price", array("index"=>2) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-2-item", array("index"=>2) ); ?>' id='<?php echo types_render_field( "add-on-2-item", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-2-item", array("index"=>2) ); ?>'><?php echo types_render_field( "add-on-2-item", array("index"=>2) ); ?></label>
									
								
									<?php } ?>
								</div>
								

									<div class="checkbox-wrap">
									<?php $additional_addon4=types_render_field( "add-on-2-item", array("index"=>3) );
									
									if($additional_addon4){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "add-on-2-price", array("index"=>3) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "add-on-2-item", array("index"=>3) ); ?>' id='<?php echo types_render_field( "add-on-2-item", array("index"=>3) ); ?>'>
									<label for='<?php echo types_render_field( "add-on-2-item", array("index"=>3) ); ?>'><?php echo types_render_field( "add-on-2-item", array("index"=>3) ); ?></label>
									
								
									<?php } ?>
								</div>
								
								
							
								
							</div>
					
						</div>
						<?php }  ?>



						

						<!-- ======================= Extra charge  ======================= -->
						<?php 



						$extracharge=types_render_field( 'extra-charge-for-equipment', array() );
						if($extracharge){
						?>
						<div class="row side-dish-row">
							<div  class="col-md-12 sidedish1-text extracharge">
								<p class="side-dish-title"><?php echo (types_render_field( "extra-charge-for-equipment", array( ) )); ?></p>

								
								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "extra-charge-add-on", array("index"=>0) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "extra-change-price", array("index"=>0) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "extra-charge-add-on", array("index"=>0) ); ?>' id='<?php echo types_render_field( "extra-charge-add-on", array("index"=>0) ); ?>'>
									<label for='<?php echo types_render_field( "extra-charge-add-on", array("index"=>0) ); ?>'><?php echo types_render_field( "extra-charge-add-on", array("index"=>0) ); ?></label>
									
								
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "extra-charge-add-on", array("index"=>1) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "extra-change-price", array("index"=>1) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "extra-charge-add-on", array("index"=>1) ); ?>' id='<?php echo types_render_field( "extra-charge-add-on", array("index"=>1) ); ?>'>
									<label for='<?php echo types_render_field( "extra-charge-add-on", array("index"=>1) ); ?>'><?php echo types_render_field( "extra-charge-add-on", array("index"=>1) ); ?></label>
									
								
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "extra-charge-add-on", array("index"=>2) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "extra-change-price", array("index"=>2) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "extra-charge-add-on", array("index"=>2) ); ?>' id='<?php echo types_render_field( "extra-charge-add-on", array("index"=>2) ); ?>'>
									<label for='<?php echo types_render_field( "extra-charge-add-on", array("index"=>2) ); ?>'><?php echo types_render_field( "extra-charge-add-on", array("index"=>2) ); ?></label>
									
								
									<?php } ?>
								</div>

								<div class="checkbox-wrap">
									<?php $additional_addon1=types_render_field( "extra-charge-add-on", array("index"=>3) );
									
									if($additional_addon1){
									?>
									
									<input data-addonprice="<?php echo types_render_field( "extra-change-price", array("index"=>3) ); ?>" type="checkbox" name="menu1" value='<?php echo types_render_field( "extra-charge-add-on", array("index"=>3) ); ?>' id='<?php echo types_render_field( "extra-charge-add-on", array("index"=>3) ); ?>'>
									<label for='<?php echo types_render_field( "extra-charge-add-on", array("index"=>3) ); ?>'><?php echo types_render_field( "extra-charge-add-on", array("index"=>3) ); ?></label>
									
								
									<?php } ?>
								</div>




								
								
								
							
								
							</div>
					
						</div>
						<?php }  ?>


						<!-- ======================= Delivery Info ======================= -->
						<?php $minfo=types_render_field( 'menu-info', array() );
						
						if($minfo){ ?>
							<div class="menu-info" style="padding-top: 30px;">
							<?php echo types_render_field( "menu-info", array() ); ?>
							</div>
						<?php }?>

						</div><!-- =================== accordion content end ===================  -->
					</div>
					<?php endwhile;endif;wp_reset_query(); ?>
					
					
					</div> <!-- accordtion ends -->

					<p class="black">*Please select only 1 menu. For any additional menu or for bookings above 100pax, please <a href="/contact" >contact us</a>.</p>
					<!--hide mobile form <div id="mobile-form">
						<?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
					</div> -->
				</div>
				
				<!-- ======================= Order Form ======================= -->
				<div class="order-form-area col-md-5 col-md-offset-1">
					<div class="section-break">
						<h2 class="order-form-title">Order Form</h2>
						<p class="one-week"><em><strong>Please book at least 1 week in advance</strong></em></p>
					</div>

					<div class="your-selection section-break">
						
						
						<div class="append-menu-content">
							
						</div>
					</div>
					<div class="gravity-form-area">
						<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
					</div>
					
				</div>
				
			</div>
		</div>
		<!-- ======================================= awards ===================================-->
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