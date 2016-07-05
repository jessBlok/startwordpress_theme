


<div class="row" id = "blog-section">
    
    
    
    <h1><?php  _e('Blog', 'startwordpress')?></h1>
            
            <?php 
                $count=0; 
                query_posts('posts_per_page=9'); 
                while (have_posts()) : the_post(); 
            ?>
                
            <div class="col-md-4 post-div same-height">
                       <div class = "row ">
                        <a href="<?php the_permalink(); ?>">
 	                    <img class ="img-thumbnail" src ="<?php the_post_thumbnail();?>
	                   
	                    <div class = "entry-title">
	                    <h3><?php the_title (); ?></h3>
        	              </a></div>
                       </div> <!--End Row-->
                   <div class ="row">
                         <div class = "entry-meta col-xs-4" id="post-date"> 
                            <i class="fa fa-calendar-o"></i> <?php the_date(); ?>
                         </div><!--End Col-->
                        <div class = "entry-meta col-xs-8" id = "post-category"> 
                             <i class="fa fa-folder-open"></i><?php the_category(); ?>
                        </div> <!--End Col-->
                </div><!--End Row-->
                <div class ="row"> 
                        <div class = "entry-meta col-xs-12"> 
                            <i class="fa fa-tags" aria-hidden="true"></i>
                             <?php the_tags(); ?>
                        </div> <!--End Col-->
                </div><!--End Row-->
                <div class = "row">
                    <div class = "col-xs-12" id = "excerpt-content" >
                     <?php the_excerpt();?>
                       </div> <!--End Col-->
               </div> <!--End Row-->
            </div> 
            <?php 
         $count++; 
         endwhile; 
            ?>
        </div> <!--End Row End Container Fluid-->
    </div>
    </div>
    </div>
    