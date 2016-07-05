<div class="container my-container">
// start the loop
<?php
  $args=array(
     'post_type' => 'post',
     'post_status' => 'publish',
     'posts_per_page' => 18
    );

  $my_query = null;
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {

    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post();
  // modified to work with 3 columns
  // output an open <div>
  if($i % 3 == 0) { ?> 

  <div class="row">

  <?php
  }
  ?>

    <div class="col-md-4">
      <div class="my-inner">
      // all your content, title, meta fields etc go here.
      </div>
    </div>  
// increment the loop BEFORE we test the variable
      <?php $i++; 
      if($i != 0 && $i % 3 == 0) { ?>
        </div><!--/.row-->
        <div class="clearfix"></div>

      <?php
       } ?>

      <?php  
        endwhile;
        }
        wp_reset_query();
        ?>

</div><!--/.container-->  