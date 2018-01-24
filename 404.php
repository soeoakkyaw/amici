<?php

/**

 * The template for displaying 404 pages (not found)

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



get_header(); ?>



	<div id="primary" class="content-area container">

		<main id="main" class="site-main" role="main">



			<section class="error-404 not-found">

				<header class="page-header">

					<h3 class="page-title black"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h3>

				</header><!-- .page-header -->



				<div class="page-content">

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>



					<?php get_search_form(); ?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->



		</main><!-- .site-main -->

	</div><!-- .content-area -->



<?php get_footer(); ?>

