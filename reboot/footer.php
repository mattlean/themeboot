      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>
            &copy; 2014-2016 <?php bloginfo('name'); ?>
            <?php wp_nav_menu(array('container' => false, 'menu_class' => 'list-inline', 'theme_location' => 'footer-nav-menu') ); ?>
        </p>
      </footer>

    </div><!-- /.container -->

    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/holder.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
    <?php
      $cscript_vals = get_post_custom_values('cscript');

      if($cscript_vals) {
          generate_cscripts($cscript_vals);
      }
    ?>
    <?php wp_footer(); ?>
  </body>
</html>