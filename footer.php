<footer class="text-white">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php if (is_active_sidebar('footer1')) : ?>
          <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php if (is_active_sidebar('footer2')) : ?>
          <?php dynamic_sidebar('footer2'); ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php if (is_active_sidebar('footer3')) : ?>
          <?php dynamic_sidebar('footer3'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="copyright container">
    <div class="row">
      <div class="col">
        <p><?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?></p>
      </div>
      <div class="col">
        <nav>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-menu'
          )); ?>
        </nav>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>