<?php get_header ();?>

      
          <div class="row">

           <div class="jumbotron" id="ssw-intro-image">
                
                  
                 <h1> <strong> <?php  _e('Putting social science to use for todays democracies.','startwordpress')?> </strong></h1>
                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Learn more</a></p>
            </div>   
    </div>
    
   <container>
        <div class = "container">
            <div class = "row" id = "intro-text-section">
                <h3> Social Science Works is a social enterprise putting social science research to work for civil society and democratic decision making. It helps stakeholders that are affected by research to assess, via second opinions, the quality and reliability of this research. It helps people to understand and evaluate research and policy making via courses and workshops. And it critically researches academic research, education and practices. Strengthening the societal relevancy of social science and the quality of public decision making is our goal.</h3>
            </div>
    </<div></div>>
    
    
    
    <!--ADD PROJECTS SECTION with 4 PARTS-->
    
    
   <container>
        <div class = "row" id = "projects-section">
        
        <h1>Our Work</h1>
         </row>
              <div class=" row col-md-6 projects single-image"  id="top-left">
                     <div class="jumbotron center-block" id="deliberation">
                                 <h2> <strong> Deliberation in Action</strong></h2>
                                 <p class= "project-text-overlays"> Courses based on social science research in delberation in which migrants and natives together discuss basic human values<p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Learn more</a></p>
                      </div> 
               </div>
                  
               <div class="col-md-6 projects single-image"  id="top-right">
                     <div class="jumbotron center-block" id="second-opinions">
                                 <h2> <strong> Second Opinion</strong></h2>
                                 <p class= "project-text-overlays"> Courses based on social science research in delberation in which migrants and natives together discuss basic human values<p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Learn more</a></p>
                        </div> 
               </div>
                  
                  
        
        </row>    
       
             
             </row>
             
              <div class=" row col-md-6 projects single-image"  id="top-left">
                     <div class="jumbotron center-block" id="training">
                                 <h2> <strong> Training</strong></h2>
                                 <p class= "project-text-overlays"> Courses based on social science research in delberation in which migrants and natives together discuss basic human values<p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Learn more</a></p>
                      </div> 
               </div>
                  
               <div class="col-md-6 projects single-image"  id="top-right">
                     <div class="jumbotron center-block" id="science-watch">
                                 <h2> <strong> Science Watch</strong></h2>
                                 <p class= "project-text-overlays"> Courses based on social science research in delberation in which migrants and natives together discuss basic human values<p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Learn more</a></p>
                        </div> 
               </div>
                  
                  
            </div>
        </row>    
          
    </container> 
  
    <container>
        <div class= "row" id= "blog-section">
        <div>
            <h1>Blog</h1>
        </div> 
        
        <div class="row">
    
            <?php 
                $count=0; 
                query_posts('posts_per_page=3'); 
                while (have_posts()) : the_post(); 
            ?>
                <div class="col-sm-4 blog-post thumb">
                     <a class="thumbnail" href="<?php the_permalink(); ?>">
 	                <?php the_post_thumbnail(); ?>
        	        </a>
        	    <div class= "blog-caps" id ="entry-title"><h3><?php the_title (); ?></h3></div>
                    <row>
                        <div class = "entry-meta col-md-5"> 
                            <i class="fa fa-calendar-o"></i> <?php the_date(); ?>
                        </div>
                         <div class = "entry-meta col-md-7"> 
                             <i class="fa fa-folder-open" aria-hidden="true"></i><?php the_category(); ?>
                    </div> 
                </row>
                <row> 
                    <div class = "entry-meta col-md-12"> 
                        <i class="fa fa-tags" aria-hidden="true"></i>
                         <?php the_tags(); ?>
                    </div>
                </row>
            <row> <?php the_excerpt();?></row>
               </div>
    
            <?php 
         $count++; 
         endwhile;
            ?>
    </div>
</div>
</container>

        
        
        
    
    
    <div class = "row" id = "team-section">
        <h1>Our Team</h1>
          <div class="col-md-4""team-members">
              
              <img src="https://wpbootstrap-jessblokland.c9users.io/wp-content/uploads/2016/06/rsz_img_5447-bearbeitet-e1465465658925.jpg"  class="img-circle" "img-responsive">
              
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Dr. Hans Blokland</a></p>
          
                    </div>
          <div class="col-md-4" "team-members">
              <img src="https://wpbootstrap-jessblokland.c9users.io/wp-content/uploads/2016/06/Sarah-Coughlan-photo-e1465465183262.jpg" class="img-circle" "img-responsive">
              
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Sarah Coughlan MA</a></p>
          </div>
          <div class="col-md-4" "team-members">
              <img src="https://wpbootstrap-jessblokland.c9users.io/wp-content/uploads/2016/06/Nils-e1465465265851.png" class="img-circle" "img-responsive">
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button">Nils Wadt</a></p>
              
          </div>
        
    </div>   <!--End Row-->
  
    
    </div> <!-- /.row -->
    </container>
    
    <?php get_footer ();?>
    

        

    


   