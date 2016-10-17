<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
    <div class="row breadcrumb">
        <div class="col-sm-offset-1 col-sm-10">
            <h6><a href="<?php echo home_url(); ?>">Portada</a> /</h6>
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row the-content">
        <div class="col-sm-offset-1 col-sm-10">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

<?php /*

      <div class="row">
        <div class="col-md-8" style="margin-bottom:20px;">
        
<?php
if ( is_search() ) {
    // add external search form (Google, Yahoo, Bing...)
	?> <h1 class="text-center titulos">Resultados de búsqueda para "<?php the_search_query(); ?>"</h1><hr /> <?php
}
?>
    		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>

            <?php echo get_the_post_thumbnail($page->ID, '8-columnas', array( 'class' => 'img-responsive' ) ); ?>
            
            <!-- Título. -->
            
			<?php if(function_exists('bcn_display'))
				{
					?> <div class="breadcrumb"> <?php bcn_display(); ?> </div> <?php
				}
			?>
            
            <h1 class="text-center titulos"><?php the_title(); ?></h1>
            
            <?php if ( is_single() ) { ?>
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="pull-left"><p class="fechadepost">Publicado el <?php the_date(); ?></p></div>
                <div class="pull-right" id="PR-fb-noP">
                <div style="position:relative; top:-6px;"><div class="fb-share-button" data-href="<?php echo the_permalink(); ?>" data-layout="button">&nbsp;</div></div></div>
                <div class="pull-right" id="PR-tw-noP"><a href="https://twitter.com/share" class="twitter-share-button" data-via="twittsejera" data-lang="es" data-related="twittsejera" data-count="none">Twittear</a>&nbsp;<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
              </div>
            </div>
			<?php } ?>
            
            <br>
            
		  <div class="contenidodepag entry-content">
		  <?php the_content(); ?>
          </div>
          
          	<br class="visible-xs">
 
 	<footer class="entry-footer clearfix">
		<?php edit_post_link( __( 'Editar', 'nciudadanos' ), '<span class="edit-link btn btn-default btn-block" style="margin:5px 0;">', '</span>' ); ?>
            	<?php if ( is_single() && has_tag() ) { 
		 the_tags( 'Etiquetas: <span class="btn btn-default">', '</span>&nbsp;<span class="btn btn-default">', '</span>' );
		}
		?>

	</footer><!-- .entry-footer -->
           

                <?php

				endwhile;

			else :

				// If no content, include the "No posts found" template.
				?> <h1>Hola, no encontramos nada. </h1> <?php 

			endif;
		?>
		</div>
          
        <div class="col-md-4">
            <?php
			if ( is_active_sidebar( 'sidebar-general' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-general' ) ?>
			<?php endif; ?>
        </div>	
	</div>
    
    */ ?>