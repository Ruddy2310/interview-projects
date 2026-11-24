<?php get_header(); ?>
<section class="hero"><div class="wrap">
  <h1><?php bloginfo( 'name' ); ?></h1>
  <p><?php bloginfo( 'description' ); ?></p>
  <a class="btn" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Read the blog</a>
</div></section>
<div class="wrap"><div class="posts">
<?php
$q = new WP_Query( array( 'posts_per_page' => 3 ) );
if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
  <article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta"><?php echo esc_html( get_the_date() ); ?></div>
    <?php the_excerpt(); ?>
  </article>
<?php endwhile; wp_reset_postdata(); else : ?>
  <p>No posts yet.</p>
<?php endif; ?>
</div></div>
<?php get_footer(); ?>
