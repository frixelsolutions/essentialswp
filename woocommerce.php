<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-9">
			<div class="content">
				<div class="woocommerce_container">
					<?php woocommerce_content(); ?>
				</div>
			</div>
			
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>