<!--This is the template for FULL WIDTH PAGES WITH NO SIDEBARS-->



<?php get_header(); ?>

		<div class="row" id = "main-content">
		<div class="col-sm-12">
			
			
			
			
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>