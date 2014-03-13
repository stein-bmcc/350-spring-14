		<?php get_header(); ?>

		<div class="posts">
			
			<?php 
				//run the wordpress loop 
					if (have_posts()) : 
						//Set the title for the page 
						the_post(); 
			?>
						<h2 class="page-title">
						    <?php 

						    //get queried object in case it's needed
						    $queried_object = get_queried_object();


						    if ( is_day() ) { 
						      	echo 'Archive for ' . get_the_date(); 

						    } elseif ( is_month() ) { 
						      	echo 'Archive for ' . get_the_date('F Y'); 

						    } elseif ( is_year() ) { 
						       	echo 'Archive for ' . get_the_date('Y'); 

						    } elseif ( is_tag() ) { 
						       	echo 'Posts Tagged with ' . $queried_object->name ; 

						    } elseif ( is_category() ) { 
						       	echo $queried_object->name . ' Category'; 

						    }elseif($queried_object->user_login){
						    	echo 'Posts by ' . $queried_object->user_nicename ;
						    } 
						    ?>
						 </h2>
				<?php
						 if( is_category()){
						 	//echo '<p>' . $queried_object->description . '</p>';
						 	//trying something else instead
						 	echo category_description();
						}
  			  
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
		







