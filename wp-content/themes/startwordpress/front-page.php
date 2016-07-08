<?php get_header ();?>

      
          <div class="row">

           <div class="jumbotron" id="ssw-intro-image">
                
                  
                 <h1> <strong> <?php  _e('Putting social science to use for modern democracies.','startwordpress')?> </strong></h1>
                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="#" role="button"><?php  _e ('Learn more', 'startwordpress')?></a></p>
            </div>   
    </div>
    
   <container>
        <div class = "container">
            <div class = "row" id = "intro-text-section">
                <h3> <?php  _e ('Social Science Works is a social enterprise putting social science research to work for civil society and democratic decision making. It helps stakeholders that are affected by research to assess, via second opinions, the quality and reliability of this research. It helps people to understand and evaluate research and policy making via courses and workshops. And it critically researches academic research, education and practices. Strengthening the societal relevancy of social science and the quality of public decision making is our goal.', 'startwordpress')?></h3>
            </div>
    </<div>
    
    
    
    <!--ADD PROJECTS SECTION with 4 PARTS-->
    
    
   <div class = "container-fluid clearfix np">
        <div class = "row" id = "projects-section">
        
        <h1><?php  _e('Our Work', 'startwordpress')?></h1>
         </row>
        <div class="row"> 
              <div class = "col-sm-6 single np"  id="top-left">
                    <div class="jumbotron np " id="deliberation">
                        <h2> <strong><?php  _e('Projects', 'startwordpress')?></strong></h2>
                            <p class= "project-text-overlays"> <?php  _e('We partner with governments, foundations, and civil society to apply social science in  developing on the ground projects', 'startwordpress')?><p>
                                <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/projects" role="button"><?php  _e('Learn more', 'startwordpress')?></a></p>
                    </div> <!--End Jumbotron-->
               </div> <!--End Col-->
               
               <div class="col-sm-6 projects single np"  id="top-right">
                     <div class="jumbotron np " id="second-opinions">
                                 <h2> <strong> <?php  _e('Second Opinions', 'startwordpress')?></strong></h2>
                                 <p class= "project-text-overlays"><?php  _e('We provide expert assessment of existing social research for governments, nonprofits, and journalists', 'startwordpress')?><p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/social-science-watch" role="button"><?php  _e('Learn more', 'startwordpress')?></a></p>
                    </div> <!--End Jumbotron-->
               </div> <!--End Col-->
        </div><!--End Row-->    
       
             <div class = "row" id="second-column">
             
              <div class=" col-sm-6 projects single np"  id="bottom-left">
                     <div class="jumbotron center-block np" id="training">
                                 <h2> <strong><?php  _e ("Training", 'startwordpress')?></strong></h2>
                                 <p class= "project-text-overlays"> <?php  _e("We teach academic social scientists to share and apply their research and help end users to correctly interpret it", "startwordpress")?><p>
                                  <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/social-science-research-and-exchange" role="button"><?php  _e ("Learn more", 'startwordpress')?> </a></p>
                      </div> <!--End Jumbotron-->
               </div><!--End Col-->
                  
               <div class="col-sm-6 projects single np"  id="top-right">
                     <div class="jumbotron center-block np" id="science-watch">
                                 <h2> <strong><?php  _e("Science Watch", 'startwordpress')?></strong></h2>
                                 <p class= "project-text-overlays"><?php  _e("Ongoing commentary and publications on the quality and relevance of the academic social sciences", 'startwordpress')?><p>
                                  <p><a class="btn btn-primary btn-lg " id= "jumbotron-button" href="/researching-social-science" role="button"><?php  _e ("Learn more", 'startwordpress')?></a>
                        </div> <!--End Jumbotron-->
               </div><!--End Col-->
            </div><!--End Row-->
        
          
    </div> <!--End Container-->
  
  
  <!--BLOG SECTION STARTS HERE-->
  
    
        
           
          
           <div class="row" id = "blog-section">
    
    
    
    <h1><?php  _e('Blog', 'startwordpress')?></h1>
            
            <?php 
                $count=0; 
                query_posts('posts_per_page=3'); 
                while (have_posts()) : the_post(); 
            ?>
                
            <div class="col-md-4 post-div ">
                       <div class = "row center-block">
                          <div class = "blog-image-small" >
                        <a href="<?php the_permalink(); ?>">
 	                    <?php the_post_thumbnail(array(250, 300), array( 'class' => 'aligncenter' ) );?>
	                       </div>
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
    
    

        
        
        
    
    
    <div class = "row" id = "team-section">
        <h1><?php  _e('Our Team', 'startwordpress')?></h1>
          <div class="col-md-4""team-members">
              
              <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/blokland_square.jpg"  class="img-circle circle-photos" "img-responsive">
              
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/team/#blokland" role="button">Dr. Hans Blokland</a></p>
          
                    </div>
          <div class="col-md-4" "team-members">
              <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/couglan_square.jpg" class="img-circle circle-photos" "img-responsive">
              
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/team/#coughlan" role="button">Sarah Coughlan MA</a></p>
          </div>
          <div class="col-md-4" "team-members">
              <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/wadt-square.png" class="img-circle circle-photos" "img-responsive">
              <p><a class="btn btn-primary btn-lg" id= "jumbotron-button" href="/team/#wadt" role="button">Nils Wadt</a></p>
              
          </div>
        
    </div>   <!--End Row-->
  
    
    </div> <!-- /.row -->
    
    <div class = "row" id = "partners-section">
        <h1><?php  _e('Partners', 'startwordpress')?></h1>
    
    <div>
    <a href="https://www.zab-brandenburg.de/de"> 
    <img class = "partner-logos" src = "https://www.zab-brandenburg.de/sites/www.zab-brandenburg.de/themes/zab/images/logos/logo-www.zab-brandenburg.de-de.png">
    </a>
    <a href="https://www.zab-brandenburg.de/de"> 
    <img class = "partner-logos" src = "http://www.brandenburg.de/media_fast/lbm1.a.4867.de/sixcms_filename/logo0000.gif">
    </a>
    </div>
    
    <?php get_footer ();?>
    

        

    


   