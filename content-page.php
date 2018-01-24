<?php

/**

 * The template used for displaying page content

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

		// Post thumbnail.

		twentyfifteen_post_thumbnail();

	?>



	<header class="entry-header">

		<?php the_title( '<h2 class="black">', '</h1>' ); ?>

	</header><!-- .entry-header -->



	<div class="entry-content black">

		<?php the_content(); ?>

		

	</div><!-- .entry-content -->







</article><!-- #post-## -->

