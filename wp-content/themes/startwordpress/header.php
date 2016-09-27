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
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <h1 class = "brand-name">Social Science Works</h1>
      </a>
    </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div id= "wp-menu" class = "navbar-right">
          <?php 
            wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav navbar-nav',
                //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
          ?>
        </div><!--End Navbar Right-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>
                      
         
    
  

        



      
      
     