<?php
  while (have_posts()) {
    the_post(); // This function keeps track of which post we are currently working with ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
    <?php }
 ?>
