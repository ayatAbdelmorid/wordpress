<?php
/*Template Name: custom post type*/
get_header();
query_posts(array(
   'post_type' => 'custom_post_type'
)); ?>



<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			// get_template_part( 'template-parts/content', get_post_type() );
            get_template_part( 'template-parts/entry-header' );

		}
	}

	?>

</main><!-- #site-content -->


<?php get_footer(); ?>
