<?php get_header(); ?>

<div class="wrapper"><!-- closed in footer.php -->
	<div class="row">
		<div class="col-md-8">
			<div class="content">
				<?php while (have_posts()) : the_post();  ?>
	                <div <?php post_class(); ?>>
	                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
	                        <h3><?php the_title();?></h3>
	                    </a>
	                    <p class="meta">
	                        Posted on <?php the_time('F jS, Y') ?>
	                    </p>

	                    <p class="excerpt"><?php the_excerpt(); ?></p>

	                    <a href="<?php the_permalink(); ?>#comments"<p class="nocomment"><?php echo get_comments_number(); ?> Comments</p></a>

	                    <hr/>
	                </div><!-- /.post_class -->
	            <?php endwhile; ?>

	            <div class="navigation">
                	<div class="nav-prev"><p><?php next_posts_link( '&laquo; Older posts' ); ?></div>
					<div class="nav-next"><p><?php previous_posts_link( 'Newer posts &raquo;' ); ?></div>
                </div>

                <div class="clear"></div>


			</div>
			
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>