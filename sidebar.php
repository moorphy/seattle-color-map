	<?php if ( is_active_sidebar( 'primary' ) ) : ?>  

		<div id="primary" class="sidebar">

		<?php dynamic_sidebar( 'primary' ); ?>

	</div>

	<?php else : ?>
 <?php /*?> 
DEFAULT CODE: 
<?php */?>

      <h3>Search Bar</h3>
			<?php get_search_form();?>        

        <!-- Categories -->
		<ul>
            <h3>Categories</h3>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->
        <!-- LINKS -->
        <ul>
            <h3>Links</h3>
			<?php wp_list_categories('title_li='); ?>
		</ul>
        <!-- END LINKS -->

        <!-- Begin Meta -->
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
    	<!-- End Meta -->
	<?php endif; ?>

