<?php get_header(); ?>
<div class="wrap"><?php while ( have_posts() ) : the_post(); ?>
  <article class="content">
    <h1><?php the_title(); ?></h1>
    <div class="meta"><?php echo esc_html( get_the_date() ); ?></div>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?></div>
<?php get_footer(); ?>
