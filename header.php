<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>

	<!-- Estilos -->

	<!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<!-- Kit de Typekit para Bebas Neue -->
    <script src="https://use.typekit.net/tun5zdj.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Estilos de WordPress -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
      <div class="header container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" class="center-block header-logo">
                </a>
            </div>
            <div class="col-sm-8">
                <nav class="navbar navbar-default margin-1_5-0" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-NC">
        <span class="sr-only">Mostrar u ocultar navigación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs">
                Menú de navegación
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'principal',
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar-NC',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
</nav>
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-4 col-sm-4 col-sm-offset-2">
                        <a href="https://www.facebook.com/NosotrosCiudadanos" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/redes_fb_grande.png" class="center-block margin-lg" style="max-width:30px;" /></a>
                    </div>
                    <div class="col-xs-2 col-sm-4">
                        <a href="https://twitter.com/NCiudadanos" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/redes_tw_grande.png" class="center-block margin-lg" style="max-width:30px;" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php /* Línea celeste para separar header del contenido */ ?>
        <div class="row fondo-celeste padding-xs">
        </div>

      </div>
