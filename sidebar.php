<?php if ( is_active_sidebar( 'sidebar-widget' ) ) : ?>
	<div id="sidebar" class="sidebar-widget widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-widget' ); ?>
	</div><!-- #sidebar -->
<?php endif; ?>