<?php
/*
Template Name: Portada
*/

get_header(); ?>

<div class="container-fluid">


  <?php $my_query = new WP_Query( 'post_type=nc_destacados&posts_per_page=1' );
    if ( $my_query->have_posts() ) : $my_query->the_post();
    $do_not_duplicate[] = $post->ID; ?>

    <?php
    $id_foto = get_post_thumbnail_id();
    $img_fondo = wp_get_attachment_image_src( $id_foto, '12-columnas', true );
    $url_img_fondo = $img_fondo[0];
?>

<div id="post-<?php the_ID(); ?>" class="row gran-imagen"  <?php post_class(); ?> style="background: url(<?php echo $img_fondo[0]; ?>); background-position:center; background-size: cover;">
    <div class="container-fluid">
        <div class="row" style="background: transparent linear-gradient(to bottom, rgba(46,84,115,0.7), rgba(104,152,178,0.7)) repeat scroll 0% 0%; background-opacity: 0.7; min-height: 100vh;">
            <div class="col-sm-offset-2 col-sm-8" id="loop-destacado">
              <h1 class="text-center"><?php the_title(); ?></h1>
              <div><?php the_content(); ?></div>

              <?php
                $urlboton = get_post_meta( get_the_ID(), 'NC_destacado_accion_url', 1 );
                $largoboton = strlen($urlboton);
                if ($largoboton > 0) {
              ?>

              <a href="<?php echo get_post_meta( get_the_ID(), 'NC_destacado_accion_url', 1 ); ?>" class="btn btn-primary btn-lg btn-block" role="button"><?php echo get_post_meta( get_the_ID(), 'NC_destacado_accion_texto', 1 ); ?></a>

              <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php else : ?>

  <!-- Row de "destacados", si no hay destacados se muestra el header image -->
  <div class="row gran-imagen" style="background: url(<?php header_image(); ?>); background-repeat: cover; background-position: center;">
      <div class="container-fluid">
          <div class="row" style="background: transparent linear-gradient(to bottom, rgba(46,84,115,0.7), rgba(104,152,178,0.7)) repeat scroll 0% 0%; background-opacity: 0.7; min-height: 100vh;">
              <?php /* <div class="col-sm-offset-2 col-sm-8">
                <h1 class="text-center texto-blanco">¿Cómo la quieres?</h1>
                <h3 class="text-center texto-blanco">La encuesta para conocer la Constitución que sueñas.</h2>
                <a href="http://comolaquieres.nosotrosciudadanos.cl/" class="btn btn-primary btn-lg btn-block" role="button">Ir a la encuesta</a>
              </div> */ ?>
              <div class="col-sm-offset-7 col-sm-4">
                  <h1 class="texto-blanco text-right">Participación Política a través de la Formación Ciudadana</h1>
                  <h5 class="texto-blanco text-right">Nosotros Ciudadanos desarrolla distintas experiencias que buscan revalorizar el ejercicio de nuestra ciudadanía</h5>
              </div>
          </div>
      </div>
  </div>

<?php endif; ?>



    <div class="row breadcrumb padding-lg">
        <div class="col-sm-offset-1 col-sm-5">
            <h4 class="padding-md lead">Nosotros Ciudadanos busca, a través de distintas instancias de aprendizaje y formación, revalorizar tanto la actividad política como el rol activo de cada ciudadano.</h4>
        </div>
        <div class="col-sm-5">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N5MjPZq0Eew" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Noticias</h2>
        </div>
        <div class="col-sm-4">
            <a class="btn btn-primary btn-sm margin-lg pull-right" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" role="button">Revisa todas las noticias</a>
        </div>
    </div>
    <div class="row the-content">
        	<?php $my_query = new WP_Query( 'post_type=post&posts_per_page=3' );
            while ( $my_query->have_posts() ) : $my_query->the_post();
            $do_not_duplicate[] = $post->ID; ?>

                <div class="col-sm-4">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <header class="entry-header">
                            <div align="center"><?php echo get_the_post_thumbnail( $page->ID, 'portada', array( 'class' => 'img-responsive' ) ); ?></div>

                            <h6 class="text-center categoria-portada"><?php the_category('&bull;'); ?></h6>

                            <?php the_title( sprintf( '<h3 class="text-center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ) ?>

                            <p><?php the_excerpt(); ?></p>

                        </header>

                        <footer class="entry-footer">
                            <?php edit_post_link( __( 'Editar', 'nciudadanos' ), '<span class="edit-link btn btn-default btn-block" style="margin-bottom:10px;">', '</span>' ); ?>
                        </footer><!-- .entry-footer -->

                    </article></div><!-- #post-## -->

        <?php endwhile; ?>
    </div>
</div>
<div class="container-fluid fondo-gris">
    <div class="row">
        <div class="col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>¡Colabora con nosotros!</h3><p>Existen muchas formas de ser parte de Nosotros Ciudadanos. Elige la que más se acomode a tus posibilidades.</p>
                    </div>
                    <div class="col-sm-2">
                      <img src="<?php bloginfo('template_directory'); ?>/img/boton-mailing.png" alt="Informándote sobre nuestras actividades" class="center-block img-circle img-responsive margin-md"><h4 class="text-center"><a data-toggle="modal" data-target="#modalNewsletter">Informándote sobre nuestras actividades</a></h4>

                      <div class="modal fade" tabindex="-1" role="dialog" id="modalNewsletter">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Inscripción en nuestro newsletter</h4>
                            </div>
                            <div class="modal-body">
                              <div id="mc_embed_signup">
                                <form action="//nosotrosciudadanos.us10.list-manage.com/subscribe/post?u=13dea90733b67abcba5792e67&amp;id=383d08f86d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                  <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group form-group">
                                      <label for="mce-EMAIL" class="text-light">Correo electrónico:</label>
                                      <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                                    </div>
                                    <div class="mc-field-group form-group">
                                      <label for="mce-MMERGE3" class="text-light">Nombre:</label>
                                      <input type="text" value="" name="MMERGE3" class="form-control" id="mce-MMERGE3">
                                    </div>
                                    <div class="mc-field-group form-group">
                                      <label for="mce-MMERGE4" class="text-light">Cargo:</label>
                                      <input type="text" value="" name="MMERGE4" class="form-control" id="mce-MMERGE4">
                                    </div>
                                    <div class="mc-field-group form-group">
                                      <label for="mce-MMERGE5" class="text-light">Institución:</label>
                                      <input type="text" value="" name="MMERGE5" class="form-control" id="mce-MMERGE5">
                                    </div>
                                    <div class="mc-field-group form-group">
                                      <label for="mce-MMERGE6" class="text-light">Grupo:</label>
                                      <input type="text" value="" name="MMERGE6" class="form-control" id="mce-MMERGE6">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                      <div class="response" id="mce-error-response" style="display:none"></div>
                                      <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_13dea90733b67abcba5792e67_383d08f86d" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default btn-block"></div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->

                    </div>
                    <div class="col-sm-2">
                        <img src="<?php bloginfo('template_directory'); ?>/img/boton-aporte-monetario.png" alt="Realizando una donación" class="center-block img-circle img-responsive margin-md"><h4 class="text-center"><a href="http://nosotrosciudadanos.cl/producto/donacion-a-nosotros-ciudadanos/">Realizando una donación</a></h4>
                    </div>
                    <div class="col-sm-2">
                      <img src="<?php bloginfo('template_directory'); ?>/img/boton-trabajo-voluntario.png" alt="Colaborando como voluntario" class="center-block img-circle img-responsive margin-md"><h4 class="text-center"><a href="http://nosotrosciudadanos.cl/participa/">Colaborando como voluntario</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
