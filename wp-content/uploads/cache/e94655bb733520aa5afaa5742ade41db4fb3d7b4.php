<footer class="footer">
  <div class="footer__content">
    <nav class="footer__nav">
      <?php if(has_nav_menu('footer_nav')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'footer_nav', 'menu_class' => 'footer__list']); ?>

      <?php endif; ?>
    </nav>
    <h2 class="footer__title">
      Business travel
    </h2>
    <div class="footer__inc">
      Travel <span class="footer__date">2019</span> | All rights reserved
    </div>
  </div>
<!-- </footer>
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer') ?>
  </div> -->
</footer>
