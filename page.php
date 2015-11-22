<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-8">
			<div class="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	                <div <?php post_class(); ?>>
	                    <h3><?php the_title();?></h3>

	                    <?php the_content(); ?>

	                    <hr/>

	                </div><!-- /.post_class -->
	            <?php endwhile; endif; ?>

	            <?php comments_template(); ?>

			</div>
			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>