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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56225107-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>