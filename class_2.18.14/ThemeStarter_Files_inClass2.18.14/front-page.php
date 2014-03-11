<?php get_header(); ?>

	<h2>This is the portfolio of Chris Stein. Ain't it grand?</h2>
		
		<div class="posts">

			    <?php
			        if ( have_posts() ) :
			            // Start the Loop.
			            while ( have_posts() ) : the_post();
			                //YOU CAN USE LOOP TEMPLATE TAGS HERE
			        		the_content();
			        	endwhile;
			        else :
			            // If no content, include the "No posts found" template.
			            //get_template_part( 'content', 'none' );
			        endif;
			    ?>

		</div> <!-- end content -->


		<?php
			//create arguments array for custom loop
			$args = array(
			'category_name' => 'featured'
			);

			//create a custom loop
			$featured = new WP_Query($args);
		?>

		<?php
			// runn the loop
			if($featured->have_posts()) :
				while($featured->have_posts()) : $featured->the_post();
					get_template_part( 'content','front' );
				endwhile;
			else: ?>
				<p>Query returned no posts</p>
			<?php endif;

			//RESET The Loop
			wp_reset_postdata();
		?>



<?php get_footer(); ?>