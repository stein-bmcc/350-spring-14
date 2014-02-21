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

<!-- 			<article class="post">
				<header>
					<h2 class="entry-title"><a href="permalink_to_title">The Title of the Post</a></h2>
				</header>

				<div class="content">
					<p>
						the_content() of the post goes here
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum commodi necessitatibus cupiditate id eligendi magnam maxime similique temporibus saepe blanditiis fugiat ipsam placeat deserunt doloribus illo obcaecati suscipit eum autem!
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit iusto fugiat magni enim. Veritatis quidem tempora sequi architecto sunt minima a nulla quia beatae amet sint necessitatibus consectetur repellat. Qui.
					</p>
				</div>

				<p class="entry-meta">Posted on February 21, 2005 by <span class="author">Chris Stein</span> | <a href="#">Comments</a></p>

			</article> -->

		</div> <!-- end content -->

<?php get_footer(); ?>