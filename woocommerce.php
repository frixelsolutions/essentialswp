<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-8">
			<div class="content">
				<?php woocommerce_content(); ?>
			</div>
			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>