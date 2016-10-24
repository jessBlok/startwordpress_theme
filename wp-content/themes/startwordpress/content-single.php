  	<div class = "container">
<div class="blog-post">
    <hr>
   	<h2 class="blog-post-title"><?php the_title(); ?></h2>
   
   	<div class = "col-md-12 text-center" id= "single-post-meta" ><p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p></div>
   	<hr>
   	
   	<div class = "row">
        <div  id= "single-post-photo"> <?php the_post_thumbnail ('large', array( 'class' => 'aligncenter img-responsive' ))?> </div>
    </div> <!-- /row -->
    	<div class = "row">
          <div class = "post-content"><?php the_content(); ?> </div>
        </div> <!-- /row -->
    </div> <!-- /container -->     
</div><!-- /.blog-post -->