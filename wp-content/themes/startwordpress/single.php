<?php get_header(); ?>
	<div class = "container">
		<div class="row">
		<div class="col-sm-12">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content-single', get_post_format() );
					
				endwhile; endif; 
			?>
			
		<hr>	
			
			<?php
			if ( comments_open() || get_comments_number() ) :
    		comments_template();
            
			endif;
 			?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div><!--End Container-->	

<?php get_footer(); ?>