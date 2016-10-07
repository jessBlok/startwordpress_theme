<?php get_header ();?>

<!--JUMBOTRON ENTRY HERO-->

<div class = "container">
    <div class="row">

           <div class="jumbotron" id="ssw-intro-image">
                <h1><strong> <?php  _e('Putting social science to use for modern democracies.','startwordpress')?> </strong></h1>
                <div class = "container addspace">
                </div><!--End container addspace-->
           </div> <!--End Jumbotron-->  
        </div> <!--End Row--> 
    


<!-- INTRO AND NEWS SECTION WITH 2 COLUMNS--> 
    
    <div class = "row">
            <div class = "col-md-6" id = "intro-text-section">
                <h3 class= "intro-text"> <?php  _e ('Social Science Works is a social enterprise using social scientific knowledge to improve civil society. We offer services based on social research that create value for agents in the public, the academic and the non-profit sectors.', 'startwordpress')?></h3>
            </div><!--End intro text section-->
            <div class = "col-md-6 alert alert-rust">
                <div class= "entry-title">
                        <h3> <?php  _e ('Latest News', 'startwordpress')?></h3>
                </div><!--End Entry Title-->
                <div>
                 <?php if ( have_posts() ) : ?>
                 <?php query_posts( 'category_name=news&posts_per_page=3' ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
	                        
                            <a class = "newssection" href="<?php the_permalink(); ?>">
                              <?php the_title (); ?> <br>
        	                </a>
                    <?php endwhile; ?>
                <?php endif; ?>    
                
                </div> <!--End loop div-->       
            </div><!--End news alert section-->
    </div><!--End row-->
    
    
    
    
<!-- PROJECTS SECTION with 4 PARTS-->
    
    
   
    <div id = "projects-section">
        <div>
        <h1><?php  _e('Our Work', 'startwordpress')?></h1>
        </div> 
        
       
            <div class="row"> 
                <div class = "col-sm-6 col-centered backimage backimage1 caption" >
                    
                            <div class = "captiondesign">
                            <h2> <strong><?php  _e('Projects', 'startwordpress')?></strong></h2>
                            <p> <?php  _e('We partner with governments, foundations, and civil society to apply social science in  developing on the ground projects', 'startwordpress')?></p>
                            <a class="btn btn-lg jumbotron-button"  href="/projects" role="button"><?php  _e('Learn more', 'startwordpress')?></a>
                            </div>
                </div> <!--End Top Left-->
              
                <div class="col-sm-6 col-centered backimage backimage2 caption"  >
                        
                            <div class = "captiondesign">
                            <h2> <strong> <?php  _e('Second Opinions', 'startwordpress')?></strong></h2>
                            <p><?php  _e('We provide expert assessment of existing social research for governments, nonprofits, and journalists', 'startwordpress')?></p>
                            <a class="btn btn-lg jumbotron-button"  href="/social-science-watch" role="button"><?php  _e('Learn more', 'startwordpress')?></a>
                            </div>  
                </div> <!--End Top Right-->
            </div><!--End Row-->
            
        
            <div class="row">
                <div class="col-sm-6 col-centered backimage backimage3 caption">
                            <div class = "captiondesign">
                                                        <h2> <strong><?php  _e ("Training", 'startwordpress')?></strong></h2>
                            <p class= "project-text-overlays"> <?php  _e("We teach academic social scientists to share and apply their research and help end users to correctly interpret it", "startwordpress")?></p>
                            <a class="btn btn-lg jumbotron-button"  href="/social-science-research-and-exchange" role="button"><?php  _e ("Learn more", 'startwordpress')?></a>
                            </div>
               </div><!--End Bottom Left-->
                  
               <div class="col-sm-6 col-centered backimage backimage4 caption" >
                            <div class = "captiondesign">
                            <h2> <strong><?php  _e("Science Watch", 'startwordpress')?></strong></h2>
                            <p class= "project-text-overlays"><?php  _e("Ongoing commentary and publications on the quality and relevance of the academic social sciences", 'startwordpress')?></p>
                            <a class="btn btn-lg jumbotron-button"  href="/researching-social-science" role="button"><?php  _e ("Learn more", 'startwordpress')?></a>
                            </div>
               </div><!--End bottom right-->
            </div><!--End Row-->
        
        </div><!--End flex container-->
    
    
   
  
  <!--BLOG SECTION STARTS HERE-->
  
          
   <div class="row" id = "blog-section">
        <div>
            <h1><?php  _e('The SSW Blog', 'startwordpress')?></h1>
        </div> 
        <div>
            <?php 
                $count=0; 
                query_posts('cat=-309&posts_per_page=3'); 
                while (have_posts()) : the_post(); 
            ?>
          
        
                <div class="col-md-4 post-div ">
                        <div>
                            <a href="<?php the_permalink(); ?>">
     	                        <?php the_post_thumbnail('medium', array('class' => 'aligncenter objectfit'));;?>
    	               </div>
    	               <div class = "entry-title">
    	                    <h3><?php the_title (); ?></h3>
            	            </a>
            	       </div>
                       <div class = "entry-meta col-xs-12 aligncenter" id="post-date"> 
                            <p>By <?php the_author(); ?> on  <?php the_date(); ?></p>
                       </div><!--End date div-->
                       <div class = "col-xs-12" id = "excerpt-content" >
                         <?php the_excerpt();?>
                        </div> <!--excertp div-->
                   
                </div><!--End post div--> 
            <?php 
             $count++; 
             endwhile;
            ?>
        </div><!--End loop div -->
    </div><!--End blog section , end row-->
   
    
    

  <!--TEAM SECTION-->     
        
    <div class = "row" id = "team-section">
        <h1><?php  _e('Meet the Team', 'startwordpress')?></h1>
            <div class="col-md-4">
                  <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/blokland_square.jpg"  class="img-circle circle-photos" "img-responsive">
                  <p><a class="btn jumbotron-button btn-lg" id= "jumbotron-button" href="/team/#blokland" role="button">Dr. Hans Blokland</a></p>            
            </div><!--End First Team Member-->
            <div class="col-md-4">
                  <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/couglan_square.jpg" class="img-circle circle-photos" "img-responsive">
                  <p><a class="btn jumbotron-button btn-lg" id= "jumbotron-button" href="/team/#coughlan" role="button">Sarah Coughlan MA</a></p>
            </div><!--End Second Team Member-->
            <div class="col-md-4">
                  <img src="http://socialscienceworks.org/wp-content/uploads/2016/07/wadt-square.png" class="img-circle circle-photos" "img-responsive">
                  <p><a class="btn jumbotron-button btn-lg" id= "jumbotron-button" href="/team/#wadt" role="button">Nils Wadt</a></p>
            </div><!--End Third Team Member-->
    </div>   <!--End Team Secion-->
  
    
<!--PARTNERS SECTION-->    
    
    <div class = "row" id = "partners-section">
        <h1><?php  _e('Partners', 'startwordpress')?></h1>
    
        <div>
            <a href="https://www.zab-brandenburg.de/de" target = "_blank"> 
                <img class = "partner-logos" src = "https://www.zab-brandenburg.de/sites/www.zab-brandenburg.de/themes/zab/images/logos/logo-www.zab-brandenburg.de-de.png">
            </a>
            <a href="https://www.zab-brandenburg.de/de" target = "_blank"> 
                <img class = "partner-logos" src = "http://www.brandenburg.de/media_fast/lbm1.a.4867.de/sixcms_filename/logo0000.gif">
            </a>
            <a href="http://www.politische-bildung-brandenburg.de/" target = "_blank"> 
                <img class = "partner-logos" src = "http://socialscienceworks.org/wp-content/uploads/2016/08/logo_rot_schriftzug.jpg" >
            </a>
        </div><!--End small partner logos-->
        <div>
            <a href="http://www.bamf.de/DE/Startseite/startseite-node.html" target = "_blank"> 
                <img class = "partner-logos" src = "http://socialscienceworks.org/wp-content/uploads/2016/08/logo-bamf.gif">
            </a>
        </div><!--End large partner logo-->    
</div><!--End Container-->            
    


<?php get_footer ();?>
    

        

    


   