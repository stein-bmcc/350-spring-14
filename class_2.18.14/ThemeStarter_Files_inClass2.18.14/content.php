<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
	</header>

	<div class="content">
		<!-- Usually you use one or the other -->
		<?php the_excerpt(); ?> <hr>
		<?php the_content(); ?>
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?>  by 
		<span class="author"><?php the_author_posts_link(); ?></span> | 
		<?php comments_popup_link(); ?>
		<?php comments_popup_link('No one Likes This', '1 Person likes it', '% people like it' ); ?>
	</p>

</article>