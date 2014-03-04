<div class="archive-item">
	<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="content excerpt">
		<?php the_excerpt(); ?>
	</div>

	<p class="entry-meta">Posted on <?php the_date(); ?> by <span class="author"><?php the_author_posts_link(); ?></span> | <a href="#">Comments</a></p>
	<p class="categories">Filed in: <?php the_category(', '); ?>; <?php the_tags('Taged with: ', ', ') ?></p>
</div><!-- end archive-item -->