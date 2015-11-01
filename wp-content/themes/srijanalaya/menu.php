<ul class="nav navbar-nav">
  <?php

  $args = array( 'posts_per_page' => 10, 'post_type' => 'sri-menu' );
  $postslist = new WP_Query( $args );
  while ( $postslist->have_posts() ) : $postslist->the_post();
  $content=get_the_content();
  $contents=explode("\n",$content);
  $j = 0;
  ?>

  <li class="dropdown yamm-fw first"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php the_title();?><span class="caret" ></span></a>
   <ul class="dropdown-menu">
    <div class="yamm-content">
      <?php for ($i = 0; $i < count($contents); $i++) { 
        if(strlen($contents[$i]) > 1) {
          if($j % 3 == 0) {
            echo '<ul class="col-sm-2 col-xs-4 list-unstyled">';
          }
          echo '<li>' . $contents[$i] . '</li>';
          if($j % 3 == 2) { 
            echo '</ul>';
          }
          $j++;
        }
      }
      ?>  

    </div>
  </ul>
</li>

<?php endwhile;?>


</ul>