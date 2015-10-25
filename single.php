<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-8">
			<div class="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	                <div <?php post_class(); ?>>
	                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
	                        <h3><?php the_title();?></h3>
	                    </a>
	                    <p class="meta">
	                        Posted on <?php the_time('F jS, Y') ?>
	                    </p>
	                    <hr/>

	                    <?php the_content(); ?>

	                    

	                </div><!-- /.post_class -->
	            <?php endwhile; endif; ?>

	            <h3><?php echo get_comments_number(); ?> Comments</h3><hr/>

	            <?php comments_template(); ?>

	            <hr/>

			</div>
			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>