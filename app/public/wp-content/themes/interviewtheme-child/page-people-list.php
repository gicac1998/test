<?php get_header(); ?>


<div class="contactContainer">

  <h1 class="contactTitle">People List</h1>
  <?php get_sidebar(); ?>
  <?php

    $args= array(
      'post_type' => 'people',
      'post_status'=>'publish',
      'posts_per_page'=>25
    );
    $peopleList = new WP_Query($args);
    if($peopleList->have_posts()):
      while($peopleList->have_posts()): $peopleList->the_post();
  ?>
  <div class="card">
    <a  href="<?php the_permalink(); ?>"><h1 class="nameLink"><?php the_title(); ?></h1></a>
    <?php the_post_thumbnail();?>
    <p class="excerptPeople"><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>">
      <button class="button mb" type="button" name="button">Read More</button>
    </a>
  </div>
  <?php
      endwhile;
      endif;
      wp_reset_postdata();

   ?>

 </div>
<?php get_footer(); ?>
