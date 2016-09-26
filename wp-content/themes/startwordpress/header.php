<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0sql">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    
    <?php wp_head(); ?>
  </head>

  <body>

      <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <!--<img src ="/wp-content/themes/startwordpress/theme_images/ssw-long.jpg" class = "brand">-->
        <h1 class = "brand-name">Social Science Works</h1>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <div id= "wp-menu" class = "navbar-right">
          <?php /* Primary navigation */
          wp_nav_menu( array(
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
              //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
        );
        ?>
     </div> <!--End enclosure of WP Menu component>
      
      
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                      
          </div>
          
      </div>
    
  

        



      
      
     