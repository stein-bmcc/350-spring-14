		<?php get_header(); ?>

		<div class="posts">
			
			<?php 
				//run the wordpress loop 
					if (have_posts()) : 
						//Set the title for the page 
						the_post(); 
			?>
						<h2 class="page-title">
						    <?php if ( is_day() ) { 
						      	echo 'Archive for ' . get_the_date(); 

						    } elseif ( is_month() ) { 
						      	echo 'Archive for ' . get_the_date('F Y'); 

						    } elseif ( is_year() ) { 
						       	echo 'Archive for ' . get_the_date('Y'); 

						    } elseif ( is_tag() ) { 
						       	echo 'Posts Tagged with ' . get_queried_object()->name ; 

						    } elseif ( is_category() ) { 
						       	echo get_queried_object()->category_nicename . ' Category'; 

						    }elseif(get_queried_object()->user_login){
						    	echo 'Posts by ' . get_queried_object()->user_nicename ;
						    } 
						    ?>
						 </h2>
  			<?php  
  						//print_r(get_queried_object());
  						//this gets ready for the loop
  						rewind_posts();

						while (have_posts()) : the_post(); 
							//the_content('Read the rest of this entry »');
							get_template_part('content','archive'); //look for a file named content.php 
						endwhile; 
					else : 
			?>
					<!-- Something that happens when a post isn’t found. -->
						<div class="nocontent">
							<h2>No Posts Found</h2>
							<p>It looks like there are no posts for this archive.</p>
						</div>
				<?php endif; ?>
			
		</div> <!-- end posts -->

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>
		







