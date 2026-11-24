<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
  <div class="wrap widgets"><?php dynamic_sidebar( 'footer-1' ); ?></div>
<?php endif; ?>
<footer class="site-footer"><div class="wrap">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &middot; Theme by Rudra Soni</div></footer>
<?php wp_footer(); ?>
</body>
</html>
