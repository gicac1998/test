<?php get_header(); ?>
<div class="row">
 <?php
   if(have_posts()):
     while(have_posts()): the_post();
 ?>
 <article class="contactContainer personContainer">
   <a href="/people-list">
     <button class="button">Back to list</button>
   </a>
   <?php the_title('<h1 class="titlePeople">', '</h1>'); ?>
   <?php if(has_post_thumbnail()): ?>
     <div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
   <?php endif; ?>
   <small class="category"><?php the_category(); ?></small>
   <p><?php the_content(); ?></p>

 </article>
 <?php
   endwhile;
   endif;
 ?>
</div>



<?php get_footer(); ?>
