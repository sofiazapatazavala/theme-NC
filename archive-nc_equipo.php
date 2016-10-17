<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
    <div class="content-area col-xs-12">

 		<?php if ( have_posts() ) : ?>


            <div class="row breadcrumb">
				<div class="col-sm-10 col-sm-offset-1">
                    <h6><a href="<?php echo home_url(); ?>">Portada</a> /</h6>
					<h2 class="page-title">Nuestro Equipo</h2>
				</div>
            </div>

            <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			if ( in_array( $post->ID, array($do_not_duplicate) ) ) continue;

 ?> <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		// twentyfifteen_post_thumbnail();
	?>


        <div class="col-sm-4 margin-sm equipo-container<?php if ( is_user_logged_in() ) {?> equipo-container-logged-in<?php } ?>">

            <?php the_post_thumbnail('equipo', array( 'class' => 'img-responsive img-circle center-block img-equipo' )); ?>
            <?php echo wp_get_attachment_image( get_post_meta( get_the_ID(), 'NC_hover_image_id', 1 ), 'equipo', 0, array ( 'class' => 'img-responsive img-equipo-hover img-circle center-block', ) ); ?>
        	<?php // the_title( sprintf( '<h3 class="entry-title text-center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        	<?php the_title( sprintf( '<h3 class="entry-title text-center">' ), '</h3>' ); ?>

            <?php /* Pendiente: Modificar para hacer dinámico!!! */ if ( has_term('directorio', 'equipo_categorias') && ! has_term( array('presidente','vicepresidente','secretario','tesorero'), 'equipo_categorias') ) { ?>

                       <div class="margin-sm" align="center"><span class="label label-primary text-center">Directorio</span></div>

            <?php } elseif ( has_term('presidente', 'equipo_categorias') ) { ?>
                       <div class="margin-sm" align="center"><span class="label label-primary text-center">Presidenta</span></div>
            <?php } elseif ( has_term('vicepresidente', 'equipo_categorias') ) { ?>
                       <div class="margin-sm" align="center"><span class="label label-primary text-center">Vicepresidenta</span></div>
            <?php } elseif ( has_term('secretario', 'equipo_categorias') ) { ?>
                       <div class="margin-sm" align="center"><span class="label label-primary text-center">Secretario</span></div>
            <?php } elseif ( has_term('tesorero', 'equipo_categorias') ) { ?>
                       <div class="margin-sm" align="center"><span class="label label-primary text-center">Tesorera</span></div>
            <?php } ?>

            <?php if ( has_term( 'equipo-ejecutivo', 'equipo_categorias' ) ) { ?>
                        <div class="margin-sm" align="center"><span class="label label-primary text-center">Equipo Ejecutivo</span></div>
            <?php } ?>

<div class="equipo-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

            edit_post_link( __( 'Editar', 'NC' ), '<span class="edit-link btn btn-default btn-block" style="margin-bottom:10px;">', '</span>' );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
  </div>
            </div>

</article><!-- #post-## --> <?php

			if ( is_home() && ! is_front_page() ) : ?>
            <hr />
			<?php endif;

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'NC' ),
				'next_text'          => __( 'Next page', 'NC' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'NC' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php

		endif;
		?>

</div></div></div>

	</div><!-- .content-area --></div>
        </div>

<?php get_footer(); ?>
