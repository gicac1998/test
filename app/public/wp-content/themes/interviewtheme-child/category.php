<?php get_header(); ?>


<div class="contactContainer">
  <?php the_archive_title('<h1 class="categoryTitle">', '</h1>'); ?>
  <?php
    $categories = get_categories();
    $args= array(
      'post_type' => 'people',
      'post_status'=>'publish',
      'posts_per_page'=>20,



    );
    $peopleList = new WP_Query($args);
    if($peopleList->have_posts()):
      while($peopleList->have_posts()): $peopleList->the_post();
  ?>
  <div class="card">
  <a  href="<?php the_permalink(); ?>"><h1 class="nameLink"><?php the_title(); ?></h1></a>
  <?php the_post_thumbnail();?>
  <p class="excerptPeopleCat"><?php the_excerpt(); ?></p>
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
