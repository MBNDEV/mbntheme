<?php 
    /* Template Name: Home template */
    get_header();
?>

<div class="home_content">	
	<?php
		while ( have_posts() ) : the_post();
		
		the_content();

	endwhile; // End of the loop.
	?>
</div>


<?php 
    get_footer(); 