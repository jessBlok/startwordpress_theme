<!--This is the template for FULL WIDTH PAGES WITH NO SIDEBARS-->

	<?php /* Template Name: archive */ ?>

<?php get_header(); ?>

		<div class="row" id = "main-content">
	
			
			
			<?php 
			
  						get_template_part( 'content-archive', 'get_post_format' );
  
						?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>