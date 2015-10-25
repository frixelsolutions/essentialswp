<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-8">
			<div class="content">
				<h1>Error 404 - Not Found</h1>
				<p>I'm sorry, we couldn't procure that page, file, or resource. Please check your spelling or you might have followed a bad link. Feel free to use the search below to try to find what you were looking for.</p>

				<div class="row">
					<div class="col-md-4">
						<?php get_search_form( $echo ); ?>
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>