<?php
/*
Template Name: Home
*/
?>

<img class="mobile-cover img-responsive visible-xs" src="<?php bloginfo(template_url); ?>/assets/img/background.jpg" alt="The Bigness Band">
<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'home'); ?>
<?php endwhile; ?>
