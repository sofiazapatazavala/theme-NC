<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( is_single() ) {
    // Do stuff.
    ?>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <?php
            $id_foto = get_post_thumbnail_id();
            $img_fondo = wp_get_attachment_image_src( $id_foto, '8-columnas', true );
            $url_img_fondo = $img_fondo[0];
        ?>
        <div style="background-image: url(<?php echo $img_fondo[0]; ?>);" class="titulo-single">
            <?php the_title( '<h3 class="titular fondo-celeste">', '</h3>' );	?>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <?php the_date('','<h6 class="texto-celeste">','</h6>'); ?>
            </div>
            <div class="col-sm-4">
                <?php edit_post_link( 'Editar', '<h6 class="text-right editar">', '</h6>' ); ?>
            </div>
        </div>
        <hr class="sep-gris-claro">
      </div>
    </div>
    <?php
  } else {
    // Do other stuff.
    ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        <?php the_post_thumbnail('8-columnas', array( 'class' => 'img-responsive' )); ?>
      </div>
    </div>
    <?php if ( current_user_can('edit_posts') ) { ?>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php edit_post_link( 'Editar', '<h6 class="text-right editar">', '</h6>' ); ?>
      </div>
    </div>
    <?php } ?>
    <?php
  } ?>

	<div class="row">
	<div class="col-sm-8 col-sm-offset-2 entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'nciudadanos' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'nciudadanos' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'nciudadanos' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content --></div>

</article><!-- #post-## -->
