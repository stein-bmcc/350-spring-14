<?php get_header(); ?>
		<div class="posts">

			    <?php
			        if ( have_posts() ) :
			            // Start the Loop.
			            while ( have_posts() ) : the_post();
			                //YOU CAN USE LOOP TEMPLATE TAGS HERE
			        		get_template_part('content');
			        	endwhile;
			        else :
			            // If no content, include the "No posts found" template.
			            //get_template_part( 'content', 'none' );
			        endif;
			    ?>


		</div> <!-- end content -->

<?php get_footer(); ?>