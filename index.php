<?php get_header() ?>
    


<div class="post_content">	
	<?php
		while ( have_posts() ) : the_post();
		
		the_content();

	endwhile; // End of the loop.
	?>
</div>

<?php 
    // Reusable Blocks
    //$post_cta = get_post(45552);
    //echo apply_filters('the_content',$post_cta->post_content);
?>

<?php 
    get_footer(); 
