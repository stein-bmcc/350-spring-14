<!-- 
This example lays the groundwork for having content on the homepage that is an image with the title of the work and then when you hover shows the excerpt 
See style.css for some example styling.

We will also look at this example later (probably week of 3.3.14)
-->

<div class="work-thumb">
    <a href="<?php the_permalink(); ?>">
     <?php the_post_thumbnail('sidebar-thumb'); ?>
        <div class="work-info">
            <h2><?php the_title(); ?></h2>
            <div class="info-reveal">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</div>