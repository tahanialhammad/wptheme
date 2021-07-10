</main>
<footer class="text-white">
  <div class="container">
    <div class="row ">
      <div class="col-md-4">
        <?php dynamic_sidebar('footer1'); ?>
      </div>
      <div class="col-md-4">
        <?php dynamic_sidebar('footer2'); ?>
      </div>
      <div class="col-md-4">
        <?php dynamic_sidebar('footer3'); ?>
      </div>
    </div>
  </div>
  <!-- <div class="container">
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
  </div> -->


  <div class="copyright container">
    <div class="row container">
      <div class="col-md-6">
        <p>Copyright &copy;  <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
      <div class="col-md-6">
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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
<?php wp_footer(); ?>
</body>

</html>