<?php get_header(); ?>
<div class="wrap"><div class="posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article <?php post_class( 'post' ); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></div>
    <?php the_excerpt(); ?>
  </article>
<?php endwhile; the_posts_pagination(); else : ?>
  <p>Nothing found.</p>
<?php endif; ?>
</div></div>
<?php get_footer(); ?>
