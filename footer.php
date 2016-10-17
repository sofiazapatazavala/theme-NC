
      <div class="container-fluid fondo-gris" style="padding-top: 1em;">
        <div class="row">
      	<div class="col-sm-4">
                 <?php
                    if ( is_active_sidebar( 'sidebar-footer-1' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
                    <?php endif; ?>
        </div>
      	<div class="col-sm-4">
                 <?php
                    if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
                    <?php endif; ?>
        </div>
      	<div class="col-sm-4">
                 <?php
                    if ( is_active_sidebar( 'sidebar-footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
                    <?php endif; ?>
        </div>
        </div>
                 <?php
                    if ( is_active_sidebar( 'sidebar-footer-4' ) ) : ?>
        <div class="row">
      	<div class="col-sm-12" align="center">

                        <?php dynamic_sidebar( 'sidebar-footer-4' ); ?>

        </div>
        </div>
                    <?php endif; ?>
      </div>
      
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- JS de Bootstrap -->
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>    
    
      <?php wp_footer(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/consultas.js"></script>

    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72716662-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>