<?php get_header();?>

		<!-- NOTE ====================
		ONLY add this if you want to show content from the page you've chosen as your front page.
		Most of you willnot want to do that so you can just delete this entire page-content div
		-->
		<div class="page-content">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="intro">
				<?php the_content( ); ?>
				</div>
				
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		
       	</div> <!-- end .page-content -->



       	<!--  ===========================
       		This is the code to show your works as thumbnails
       		=========================== -->
		<div class="works">
			<h2>My Work</h2>
			 <?php 
			  //create arguments array for custom loop
			 // this argument says to only get posts in the category of featured
			  $args = array(
			  'category_name' => 'featured'
			  );

			  //create a custom loop
			  $featured = new WP_Query($args);
			  ?>
				<?php 

				  // runn the loop 
				  if($featured->have_posts()) : while($featured->have_posts()) : $featured->the_post();
				  	//use content-front.php to show each work
				      get_template_part( 'content','front' );
				  endwhile;
				  else: ?>
				  		<p>Query returned no posts</p>
				  <?php endif; 

					//RESET The Loop
					wp_reset_postdata();
				?>
					
				
       	</div> <!-- end .works -->

<?php get_footer();?>