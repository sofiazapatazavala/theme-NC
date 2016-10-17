<?php get_header(); ?>
<div class="container-fluid">
    <div class="row breadcrumb">
	   <div class="col-sm-10 col-sm-offset-1">
	       <header class="entry-header">
               <h6><a href="<?php echo home_url(); ?>">Portada</a> /</h6>
               <h2 class="entry-title"><?php echo get_the_title(); ?></h2>
	       </header><!-- .entry-header -->
        </div>
    </div>
    <div class="row">
    <div class="content-area col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        
        <?php woocommerce_content(); ?>

	</div><!-- .content-area -->
    </div>
</div>

<?php get_footer(); ?>