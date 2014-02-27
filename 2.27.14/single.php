<!-- Show the Header -->
<?php get_header();?>

<!-- Run the Loop and Show the content for the page -->

<?php 
	while(have_posts()) : the_post(); 

		get_template_part('content', 'single' );

	endwhile;  
?>
<!-- 
We don't need an if/else statement with single.php because if the post doesn't show up 
WP will send a 404 message and 404.php will be called instead. 
-->

<!-- Show the footer -->
<?php get_footer();?>