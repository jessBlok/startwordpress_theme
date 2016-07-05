<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0sql">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src ="https://wpbootstrap-jessblokland.c9users.io/wp-content/uploads/2016/06/ssw-logo-vector-e1465539460115.jpg">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <div id= "wp-menu">
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
      
      
     
      <!--  <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>-->
      <!--  <li class="dropdown">-->
      <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>-->
      <!--    <ul class="dropdown-menu">-->
      <!--      <li><a href="/about">About</a></li>-->
      <!--      <li><a href="/history">History</a></li>-->
      <!--      <li><a href="/team">Team</a></li>-->
      <!--      <li role="separator" class="divider"></li>-->
      <!--      <li><a href="/assosciates">Associates</a></li>-->
      <!--      <li role="separator" class="divider"></li>-->
      <!--      <li><a href="">One more separated link</a></li>-->
      <!--      <li><a href="#">Link</a></li>-->
      <!--      <li class="dropdown">-->
      <!--    </ul>-->
      <!--  </li>-->
      <!--    <li><a href="#">Current Projects</a></li>-->
      <!--    <li><a href="/">Blog</a></li>-->
      <!--    <li><a href="#">Contact</a></li>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                      
          </div>
          
      </div>
    
  

        



      
      
     