


<div class="row">
    
    <div class = "container" id= "blog-section">
    
        <hr>
            <h1><?php  _e('Our Blog', 'startwordpress')?></h1>
        <hr>        
            <?php 
                $count=0; 
                query_posts('cat=-303&posts_per_page=27'); 
                while (have_posts()) : the_post(); 
            ?>
                
        <div class="col-md-4 post-div">
                      
            <a href="<?php the_permalink(); ?>">
 	           <?php the_post_thumbnail('medium', array( 'class' => 'aligncenter objectfit' ) );?>
	                   
	                <div class = "entry-title">
	                    <h3><?php the_title (); ?></h3>
        	</a>
        	        </div>
                       
                   
                    <div class = "entry-meta col-xs-12 centertext" id="post-date"> 
                        <i class="fa fa-calendar-o"></i> <?php the_date(); ?>
                    </div><!--End Col-->
                    
                    <div class = "col-xs-12" id = "excerpt-content" >
                         <?php the_excerpt();?>
                    </div> <!--End Col-->
              
            
        </div> <!--End Post Div-->
            
            
            <?php 
                $count++;
                if($count != 0 && $count % 3 == 0) { ?>
       
                <div class="clearfix"></div>

                <?php
                    } 
         
                endwhile; 
            ?>
    </div> <!-- Container -->
    </div> <!--End Row-->
    
    
    