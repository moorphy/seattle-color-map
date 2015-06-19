
<?php if ( is_active_sidebar( 'logo' ) ) : ?>  

		<div id="logo" class="sidebar">

		<?php dynamic_sidebar( 'logo' ); ?>

	</div>

	<?php else : ?>

      <h3>SCM LOGO</h3>
        
	<?php endif; ?>
