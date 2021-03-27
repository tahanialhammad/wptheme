</main>
<footer class="text-white">

  <div class="container list-unstyled">
    <div class="row my-4">
      <div class="col-md-4 px-4">
        <?php if (is_active_sidebar('footer1')) : ?>
          <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-4 px-4">
        <?php if (is_active_sidebar('footer2')) : ?>
          <?php dynamic_sidebar('footer2'); ?>
        <?php endif; ?>
      </div>

      <div class="col-md-4 px-4">
        <?php if (is_active_sidebar('footer3')) : ?>
          <?php dynamic_sidebar('footer3'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

<!--Start Copyright-->
  <div class="copyright py-2 border-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center text-sm-left">
          <p><?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?></p>
        </div>

        <div class="col-sm-6 text-center text-sm-right">
          <nav>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-menu',
              'menu_class' => 'footer-menu'
            )); ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
<!--End Copyright-->
</footer>

<?php wp_footer(); ?>
</body>

</html>